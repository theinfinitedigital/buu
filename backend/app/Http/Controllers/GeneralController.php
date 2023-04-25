<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\General;

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
        return view('general.index', compact('data'));
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
            // $data->index_content = $request->index_content ?? '';

            
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
            if($request->index_banner){
                
                // unlink(public_path($data->index_banner)); // del old file
                $imageName = time().rand(10,9999999).'.'.$request->index_banner->extension(); 
                $request->index_banner->move(public_path('storage/banner/'), $imageName);
                $index_banner = 'storage/banner/'.$imageName;
                $data->index_banner = $index_banner;
            }
            // if($request->index_cover_path){
                
            //     // unlink(public_path($data->index_cover_path)); // del old file
            //     $imageName = time().rand(10,9999999).'.'.$request->index_cover_path->extension(); 
            //     $request->index_cover_path->move(public_path('storage/banner/'), $imageName);
            //     $index_cover_path = 'storage/banner/'.$imageName;
            //     $data->index_cover_path = $index_cover_path;
            // }

            $data->save();
            
            return back()->with('success', __('บันทึกข้อมูลเรียบร้อยแล้ว'));

        }catch(Exception $e){
            $result = ['ไม่สามารถทำการได้ในขณะนี้ กรุณาติดต่อเจ้าหน้าที่ผู้ดูแลระบบ'];
            return back()->withErrors($result)->withInput();

        }


    }

}
