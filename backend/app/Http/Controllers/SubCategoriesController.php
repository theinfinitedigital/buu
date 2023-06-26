<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Exception;
use App\Models\Categorie;
use App\Models\SubCategorie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = SubCategorie::orderBy('id', 'DESC')->paginate(10);
        return view('sub_categories.index', compact('data'));
    }
    function add(){
        
        $categorie = Categorie::get();
        return view('sub_categories.create', compact('categorie'));
    }

    function create(Request $request){

        try{
            $data = new SubCategorie;
            $data->uid = (string) Str::orderedUuid();
            $data->categorie_id = $request->categorie_id;
            $data->title_th = $request->title_th;
            $data->title_en = $request->title_en;
            $data->des_th = $request->des_th ?? '';
            $data->des_en = $request->des_en ?? '';

            $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
            $request->path->move(public_path('storage/sub_categories/'), $imageName);
            $path = 'storage/sub_categories/'.$imageName;
            $data->path = $path;
            
            $data->alt = $request->alt ?? '';

            $data->save();

            return redirect()->route('index_sub_categories')->with('success', __('เพิ่มเรียบร้อยแล้ว'));

        }catch(Exception $e){

            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
    function edit($id,$uid){
        if( SubCategorie::where('id',$id)->where('uid',$uid)->count() != 0 ){
            $data = SubCategorie::find($id);
            $categorie = Categorie::get();
            return view('sub_categories.edit', compact('data','categorie'));
        }else{
            abort(404);
        }
        
    }
    function update(Request $request){

        try{
            
            $enable = 0;
            if($request->enable){
                $enable = 1;
            }
            
            $data = SubCategorie::find($request->id);
            $data->categorie_id = $request->categorie_id;
            $data->title_th = $request->title_th;
            $data->title_en = $request->title_en;
            $data->des_th = $request->des_th ?? '';
            $data->des_en = $request->des_en ?? '';
            $data->enable = $enable;

            if($request->path){
                unlink(public_path($data->path)); // del old file

                $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
                $request->path->move(public_path('storage/sub_categories/'), $imageName);
                $path = 'storage/sub_categories/'.$imageName;
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
            
            $data = SubCategorie::find($id);
            
            unlink(public_path($data->path)); // del old file

            SubCategorie::find($id)->delete();
            return redirect()->route('index_sub_categories')->with('success', __('ลบเรียบร้อยแล้ว'));
            
        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
}
