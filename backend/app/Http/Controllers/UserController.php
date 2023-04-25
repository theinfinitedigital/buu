<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Exception;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $data = User::whereNotIn('id',[1])->orderBy('id', 'DESC')->paginate(10);
        return view('user.index', compact('data'));
    }
    function add_user(){
        $role = Role::whereNotIn('id',[1])->get();
        return view('user.create_user', compact('role'));
    }

    function create(Request $request){

        try{
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|unique:users',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password|min:6', // this will check password   
                'role' => 'required',
            ], [
                'name.required' => 'จำเป็นต้องระบุชื่อ',
                'email.required' => 'จำเป็นต้องระบุอีเมล',
                'email.email' => 'ระบุอีเมลในรูปแบบ someone@example.com',
                'email.unique' => 'ไม่สามารถใช้อีเมลนี้ได้ เนื่องจากมีการใช้งานแล้ว',
                'password.required' => 'จำเป็นต้องระบุรหัสผ่าน',
                'password.min' => 'จำเป็นต้องระบุรหัสผ่านอย่างน้อย 6 ตัวอักษร',
                'confirm_password.required' => 'จำเป็นต้องยืนยันรหัสผ่าน',
                'confirm_password.min' => 'จำเป็นต้องระบุยืนยันรหัสผ่านอย่างน้อย 6 ตัวอักษร',
                'confirm_password.same' => 'จำเป็นต้องกรอกรหัสผ่าน และ ยืนยันรหัสผ่าน ให้ถูกต้อง',
                'role.required' => 'จำเป็นต้องกำหนดสิทธิ์การเข้าถึง',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $data = new User;
            $data->name = $request->name;
            $data->uid = (string) Str::orderedUuid();
            $data->email = $request->email;
            $data->role_id = $request->role;
            $data->password = Hash::make($request->password);
            $data->save();

            return redirect()->route('index_user')->with('success', __('เพิ่มบัญชีผู้ใช้เรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
    function edit($id,$uid){
        
        if(User::where('id',$id)->where('uid',$uid)->count() != 0){
            $data = User::find($id);
            $role = Role::whereNotIn('id',[1])->get();
            return view('user.edit', compact('data','role'));
        }else{
            abort(404);
        }
        
    }
    function update(Request $request){


        try{
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|unique:users,email,'.$request->id, 
            ], [
                'name.required' => 'จำเป็นต้องระบุชื่อ',
                'email.required' => 'จำเป็นต้องระบุอีเมล',
                'email.email' => 'ระบุอีเมลในรูปแบบ someone@example.com',
                'email.unique' => 'ไม่สามารถใช้ อีเมลนี้ได้ เนื่องจากมีการใช้งานแล้ว',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            if ($request->password != '' || $request->confirm_password != ''){
                
                $pass = Validator::make($request->all(), [
                    'password' => 'required|min:6',
                    'confirm_password' => 'required|same:password|min:6',
                ], [
                    'password.required' => 'จำเป็นต้องระบุรหัสผ่าน',
                    'password.min' => 'จำเป็นต้องระบุรหัสผ่านอย่างน้อย 6 ตัวอักษร',
                    'confirm_password.required' => 'จำเป็นต้องยืนยันรหัสผ่าน',
                    'confirm_password.min' => 'จำเป็นต้องระบุยืนยันรหัสผ่านอย่างน้อย 6 ตัวอักษร',
                    'confirm_password.same' => 'จำเป็นต้องกรอกรหัสผ่าน และ ยืนยันรหัสผ่าน ให้ถูกต้อง',
                ]);
                if ($pass->fails()) {
                    return back()->withErrors($pass)->withInput();
                }
                
                User::find($request->id)->update(['password'=> Hash::make($request->password)]);

            }
            $data = User::find($request->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->role_id = $request->role;
            $data->updated_at = Carbon::now();
            $data->save();

            return back()->with('success', __('บันทึกข้อมูลเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }


    }
    function del($id){
        try{
            User::find($id)->delete();
            return redirect()->route('index_user')->with('success', __('ลบเรียบร้อยแล้ว'));
            
        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
}
