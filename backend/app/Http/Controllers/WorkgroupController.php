<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Exception;
use App\Models\Workgroup;
use Illuminate\Support\Str;

class WorkgroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Workgroup::orderBy('id', 'DESC')->paginate(10);
        return view('workgroup.index', compact('data'));
    }
    function add(){
        return view('workgroup.create');
    }

    function create(Request $request){

        try{
            $data = new Workgroup;
            $data->uid = (string) Str::orderedUuid();
            $data->title_th = $request->title_th;
            $data->title_en = $request->title_en;

            $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
            $request->path->move(public_path('storage/workgroup/'), $imageName);
            $path = 'storage/workgroup/'.$imageName;
            $data->path = $path;
            $data->alt = $request->alt ?? '';

            $data->save();

            return redirect()->route('index_workgroup')->with('success', __('เพิ่มเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
    function edit($id,$uid){
        if( Workgroup::where('id',$id)->where('uid',$uid)->count() != 0 ){
            $data = Workgroup::find($id);
            return view('workgroup.edit', compact('data'));
        }else{
            abort(404);
        }
        
    }
    function update(Request $request){

        try{
            
            $data = Workgroup::find($request->id);
            $data->title_th = $request->title_th;
            $data->title_en = $request->title_en;

            if($request->path){
                
                unlink(public_path($data->path)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
                $request->path->move(public_path('storage/workgroup/'), $imageName);
                $path = 'storage/workgroup/'.$imageName;
                $data->path = $path;
            }
            
            $data->alt = $request->alt ?? '';
            
            $data->save();

            return back()->with('success', __('บันทึกข้อมูลเรียบร้อยแล้ว'));
        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();
        }

    }
    function del($id){
        try{
            $data = Workgroup::find($id);
            unlink(public_path($data->path)); // del old file
            Workgroup::find($id)->delete();
            return redirect()->route('index_workgroup')->with('success', __('ลบเรียบร้อยแล้ว'));
        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();
        }
    }
}
