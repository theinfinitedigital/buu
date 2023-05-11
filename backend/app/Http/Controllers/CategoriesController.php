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

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Categorie::orderBy('id', 'DESC')->paginate(10);
        return view('categories.index', compact('data'));
    }
    function add(){
        return view('categories.create');
    }

    function create(Request $request){

        try{
            $data = new Categorie;
            $data->uid = (string) Str::orderedUuid();
            $data->title_th = $request->title_th;
            $data->title_en = $request->title_en;
            $data->des_th = $request->des_th ??'';
            $data->des_en = $request->des_en ??'';

            $data->alt_cover = $request->alt_cover ?? '';
            $data->alt_banner = $request->alt_banner ?? '';

            $imageName = time().rand(10,9999999).'.'.$request->cover_path->extension(); 
            $request->cover_path->move(public_path('storage/categories/'), $imageName);
            $cover_path = 'storage/categories/'.$imageName;
            $data->cover_path = $cover_path;

            $imageName = time().rand(10,9999999).'.'.$request->banner_path->extension(); 
            $request->banner_path->move(public_path('storage/categories/'), $imageName);
            $banner_path = 'storage/categories/'.$imageName;
            $data->banner_path = $banner_path;

            $data->save();

            return redirect()->route('index_categories')->with('success', __('เพิ่มเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
    function edit($id,$uid){
        if( Categorie::where('id',$id)->where('uid',$uid)->count() != 0 ){
            $data = Categorie::find($id);
            return view('categories.edit', compact('data'));
        }else{
            abort(404);
        }
        
    }
    function update(Request $request){

        try{
            
            $data = Categorie::find($request->id);
            $data->title_th = $request->title_th;
            $data->title_en = $request->title_en;
            $data->des_th = $request->des_th ?? '';
            $data->des_en = $request->des_en ?? '';
            $data->alt_cover = $request->alt_cover ?? '';
            $data->alt_banner = $request->alt_banner ?? '';

            if($request->cover_path){
                
                unlink(public_path($data->cover_path)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->cover_path->extension(); 
                $request->cover_path->move(public_path('storage/categories/'), $imageName);
                $cover_path = 'storage/categories/'.$imageName;
                $data->cover_path = $cover_path;
            }
            
            if($request->banner_path){
                
                unlink(public_path($data->banner_path)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->banner_path->extension(); 
                $request->banner_path->move(public_path('storage/categories/'), $imageName);
                $banner_path = 'storage/categories/'.$imageName;
                $data->banner_path = $banner_path;
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

            if(SubCategorie::where('categorie_id',$id)->count() != 0){
                $result = ['ไม่สามารถลบได้ เนื่องจากมีการใช้งานของข้อมูลที่ต้องการลบอยู่'];
                return back()->withErrors($result)->withInput();
            }else{
                
                $data = Categorie::find($id);
                unlink(public_path($data->cover_path)); // del old file
                unlink(public_path($data->banner_path)); // del old file
                Categorie::find($id)->delete();
                return redirect()->route('index_categories')->with('success', __('ลบเรียบร้อยแล้ว'));
            }
            
        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
}
