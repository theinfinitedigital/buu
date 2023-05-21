<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\IndexBanner;
use Illuminate\Support\Str;
use Exception;

class IndexBannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = IndexBanner::orderBy('id', 'DESC')->paginate(10);
        return view('index_banner.index', compact('data'));
    }
    
    function add(){
        return view('index_banner.create');
    }
    function create(Request $request){
        try{
            $data = new IndexBanner;
            $data->uid = (string) Str::orderedUuid();
            $data->alt = $request->alt ?? '';
            $data->type = $request->type;
            if($request->type == 'image'){
                // unlink(public_path($data->path)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
                $request->path->move(public_path('storage/index-banner/'), $imageName);
                $path = 'storage/index-banner/'.$imageName;
                $data->path = $path;
            }else if($request->type == 'video'){
                $data->path = $request->path;
            }

            $data->save();

            return redirect()->route('index_banner')->with('success', __('เพิ่มเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }
    function edit($id,$uid){
        if( IndexBanner::where('id',$id)->where('uid',$uid)->count() != 0 ){
            $data = IndexBanner::find($id);
            return view('index_banner.edit', compact('data'));
        }else{
            abort(404);
        }
        
    }
    function update(Request $request){
    
        if($request->type == $request->type_ori){
            
            try{
                $enable = 0;
                if($request->enable){
                    $enable = 1;
                }

                $data = IndexBanner::find($request->id);
                $data->alt = $request->alt ?? '';
                $data->enable = $enable;
                $data->type = $request->type;

                if($request->type == 'image'){
                    if($request->path){
                        
                        $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
                        $request->path->move(public_path('storage/index-banner/'), $imageName);
                        $path = 'storage/index-banner/'.$imageName;
                        $data->path = $path;
                    }
                }else if($request->type == 'video'){
                    $data->path = $request->path;
                }
                
                $data->save();

                return back()->with('success', __('บันทึกข้อมูลเรียบร้อยแล้ว'));


            }catch(Exception $e){
                dd($e);
                $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
                return back()->withErrors($result)->withInput();

            }
        }else{
            $validator = Validator::make($request->all(), [
                'path' => 'required',
            ], [
                'path.required' => 'จำเป็นต้องระบุ พาธ หรือ เลือกรูปแบนเนอร์',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $enable = 0;
            if($request->enable){
                $enable = 1;
            }

            $data = IndexBanner::find($request->id);
            $data->alt = $request->alt ?? '';
            $data->enable = $enable;
            $data->type = $request->type;

            if($request->type == 'image'){
                if($request->path){
                    
                    $imageName = time().rand(10,9999999).'.'.$request->path->extension(); 
                    $request->path->move(public_path('storage/index-banner/'), $imageName);
                    $path = 'storage/index-banner/'.$imageName;
                    $data->path = $path;
                }
            }else if($request->type == 'video'){
                $data->path = $request->path;
            }
            
            $data->save();

            return back()->with('success', __('บันทึกข้อมูลเรียบร้อยแล้ว'));

        }


    }
    function del($id){
        try{

            $data = IndexBanner::find($id);
            unlink(public_path($data->path)); // del old file
            IndexBanner::find($id)->delete();
            return redirect()->route('index_banner')->with('success', __('ลบเรียบร้อยแล้ว'));
            
        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }
    }

}
