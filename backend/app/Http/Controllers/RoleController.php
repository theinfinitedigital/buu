<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Exception;
use App\Models\Role;
use App\Models\RoleSetting;
use App\Models\Setting;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Role::whereNotIn('id',[1])->orderBy('id', 'DESC')->paginate(10);
        return view('role.index', compact('data'));
    }
    function add(){
        $settingdata = Setting::get();
        return view('role.create', compact('settingdata'));
    }

    function create(Request $request){

        try{
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'permissions' => 'required',
            ], [
                'name.required' => 'จำเป็นต้องระบุชื่อ',
                'permissions.required' => 'จำเป็นต้องกำหนดสิทธิ์การเข้าถึง',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $data = new Role;
            $data->name = $request->name;
            $data->uid = (string) Str::orderedUuid();
            $data->save();
            $setting = Setting::get();

            foreach($setting as $item){
                $data_role = new RoleSetting;
                $data_role->role_id = $data->id;
                $data_role->setting_id = $item->id;
                $data_role->save();

                foreach($request->permissions as $item_permission){
                    if($item_permission == $item->id){
                        RoleSetting::find($data_role->id)->update(['enable'=> 1]);
                    }
                }
            }

            return redirect()->route('index_role')->with('success', __('เพิ่มเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
    function edit($id,$uid){
        
        if( Role::where('id',$id)->where('uid',$uid)->count() != 0){
            $data = Role::find($id);
            $settingdata = RoleSetting::where('role_id',$id)->get();
            return view('role.edit', compact('data', 'settingdata'));
        }else{
            abort(404);
        }
        
       
    }
    function update(Request $request){


        try{
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'permissions' => 'required',
            ], [
                'name.required' => 'จำเป็นต้องระบุชื่อ',
                'permissions.required' => 'จำเป็นต้องกำหนดสิทธิ์การเข้าถึง',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }


            $data = Role::find($request->id);
            $data->name = $request->name;
            $data->updated_at = Carbon::now();
            $data->save();
            

            RoleSetting::where('role_id',$request->id)->whereNotIn('id',$request->permissions)->update(['enable'=> 0]);
            RoleSetting::where('role_id',$request->id)->whereIn('id',$request->permissions)->update(['enable'=> 1]);


            return back()->with('success', __('บันทึกข้อมูลเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }


    }
    function del($id){
        try{
            Role::find($id)->delete();
            RoleSetting::where('role_id',$id)->delete();
            
            return redirect()->route('index_role')->with('success', __('ลบเรียบร้อยแล้ว'));
            
        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
}
