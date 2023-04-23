<?php
namespace App\Http\Services\Logo;

use App\Models\Logo;
use Illuminate\Support\Facades\log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class LogoService
{
    public function insert($request){
        try {
            Logo::create($request->input());
            Session::flash('success', 'Thêm logo mới thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm logo lỗi');
            Log::info($err->getMessage());

            return false;
        }

        return true;
    }

    public function get(){
        return Logo::orderByDesc('id')->paginate(10); //sap xep roi phan trang
    }
    public function update($request, $logo){
        try {
            $logo->fill($request->input());
            $logo->save();
            Session::flash('success','Cập nhật thành công');

        } catch (\Exception $err) {
            Session::flash('error','Cập nhật lỗi');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function delete($request){
        $logo = Logo::where('id', $request->input('id'))->first();
        if ($logo) {
            $path = str_replace('storage', 'public', $logo->thumb);
            Storage::delete($path);
            $logo->delete();
            return true;
        }
        return false;
    }


    public function show(){
        return Logo::where('active',1)->orderByDesc('id')->get();
    }
}

