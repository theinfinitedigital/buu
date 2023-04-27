<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Exception;
use App\Models\Personnel;
use App\Models\Department;
use Illuminate\Support\Str;

class PersonnelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Personnel::orderBy('id', 'DESC')->paginate(10);
        return view('personnel.index', compact('data'));
    }
    function add(){
        $department = Department::get();
        return view('personnel.create', compact('department'));
    }

    function create(Request $request){

        try{
            $data = new Personnel;
            $data->uid = (string) Str::orderedUuid();
            $data->department_id = $request->department_id;
            $data->name_surname_th = $request->name_surname_th;
            $data->name_surname_en = $request->name_surname_en;
            $data->position = $request->position;
            $data->detail = $request->detail ?? '';

            $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
            $request->path->move(public_path('storage/personnel/'), $imageName);
            $path = 'storage/personnel/'.$imageName;
            $data->path = $path;

            $data->save();

            return redirect()->route('index_personnel')->with('success', __('เพิ่มเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
    function edit($id,$uid){
        if( Personnel::where('id',$id)->where('uid',$uid)->count() != 0 ){
            $data = Personnel::find($id);
            
            $department = Department::get();
            return view('personnel.edit', compact('data','department'));
        }else{
            abort(404);
        }
        
    }
    function update(Request $request){

        try{
            
            $data = Personnel::find($request->id);
            $data->department_id = $request->department_id;
            $data->name_surname_th = $request->name_surname_th;
            $data->name_surname_en = $request->name_surname_en;
            $data->position = $request->position;
            $data->detail = $request->detail ?? '';

            if($request->path){
                
                unlink(public_path($data->path)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
                $request->path->move(public_path('storage/personnel/'), $imageName);
                $path = 'storage/personnel/'.$imageName;
                $data->path = $path;
            }
            
            $data->save();

            return back()->with('success', __('บันทึกข้อมูลเรียบร้อยแล้ว'));


        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }

    }
    function del($id){
        try{

                $data = Personnel::find($id);
                unlink(public_path($data->path)); // del old file
                Personnel::find($id)->delete();
                return redirect()->route('index_personnel')->with('success', __('ลบเรียบร้อยแล้ว'));
            
        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
}
