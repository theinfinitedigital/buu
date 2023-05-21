<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\General;
use App\Models\IndexBanner;

use Exception;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = General::find(1);
        $banner = IndexBanner::get();
        
        return view('general.index', compact('data','banner'));
    }

    function update(Request $request){

        try{
            
            $data = General::find(1);
            $data->contact_us_th = $request->contact_us_th ?? '';
            $data->contact_us_en = $request->contact_us_en ?? '';
            $data->address_th = $request->address_th ?? '';
            $data->address_en = $request->address_en ?? '';
            $data->email = $request->email;
            $data->tel = $request->tel;
            $data->facebook = $request->facebook;
            $data->line = $request->line;
            $data->youtube = $request->youtube;
            $data->index_header_title = $request->index_header_title;
            $data->index_title_content = $request->index_title_content;
            $data->index_content = $request->index_content ?? '';
            $data->alt_contact_us_path = $request->alt_contact_us_path ?? '';
            $data->alt_contact_us_path_banner = $request->alt_contact_us_path_banner ?? '';
            $data->alt_address_path = $request->alt_address_path ?? '';
            $data->alt_address_path_banner = $request->alt_address_path_banner ?? '';
            $data->alt_index_cover_path = $request->alt_index_cover_path ?? '';
            $data->index_cover_path_type = $request->index_cover_path_type;

        

            if($request->index_cover_path_type == $request->index_cover_path_type_ori){

                if($request->index_cover_path_type == 'image'){
                    if($request->index_cover_path){
                        
                        $imageName = time().rand(10,9999999).'.'.$request->index_cover_path->extension(); 
                        $request->index_cover_path->move(public_path('storage/banner/'), $imageName);
                        $index_cover_path = 'storage/banner/'.$imageName;
                        $data->index_cover_path = $index_cover_path;
                    }
                }else if($request->index_cover_path_type == 'video'){
                    $data->index_cover_path = $request->index_cover_path_v;
                }
            
            }else{
               
    
                if($request->index_cover_path_type == 'image'){ 
                    $validator = Validator::make($request->all(), [
                    'index_cover_path' => 'required',
                    ], [
                        'index_cover_path.required' => 'จำเป็นต้องเลือกรูป index_cover_path',
                    ]);
        
                    if ($validator->fails()) {
                        return back()->withErrors($validator)->withInput();
                    }
                    if($request->index_cover_path){
                        
                        $imageName = time().rand(10,9999999).'.'.$request->index_cover_path->extension(); 
                        $request->index_cover_path->move(public_path('storage/banner/'), $imageName);
                        $index_cover_path = 'storage/banner/'.$imageName;
                        $data->index_cover_path = $index_cover_path;
                    }
                }else if($request->index_cover_path_type == 'video'){
                    $validator = Validator::make($request->all(), [
                        'index_cover_path_v' => 'required',
                    ], [
                        'index_cover_path_v.required' => 'จำเป็นต้องระบุ index_cover_path video',
                    ]);
        
                    if ($validator->fails()) {
                        return back()->withErrors($validator)->withInput();
                    }
                    $data->index_cover_path = $request->index_cover_path_v;
                }
                
            }
            if($request->contact_us_path){
                
                // unlink(public_path($data->contact_us_path)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->contact_us_path->extension(); 
                $request->contact_us_path->move(public_path('storage/banner/'), $imageName);
                $contact_us_path = 'storage/banner/'.$imageName;
                $data->contact_us_path = $contact_us_path;
            }
            if($request->contact_us_path_banner){
                
                // unlink(public_path($data->contact_us_path_banner)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->contact_us_path_banner->extension(); 
                $request->contact_us_path_banner->move(public_path('storage/banner/'), $imageName);
                $contact_us_path_banner = 'storage/banner/'.$imageName;
                $data->contact_us_path_banner = $contact_us_path_banner;
            }
            if($request->address_path){
                
                // unlink(public_path($data->address_path)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->address_path->extension(); 
                $request->address_path->move(public_path('storage/banner/'), $imageName);
                $address_path = 'storage/banner/'.$imageName;
                $data->address_path = $address_path;
            }
            if($request->address_path_banner){
                
                // unlink(public_path($data->address_path_banner)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->address_path_banner->extension(); 
                $request->address_path_banner->move(public_path('storage/banner/'), $imageName);
                $address_path_banner = 'storage/banner/'.$imageName;
                $data->address_path_banner = $address_path_banner;
            }
          

            $data->save();
            
            return back()->with('success', __('บันทึกข้อมูลเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }


    }

}
