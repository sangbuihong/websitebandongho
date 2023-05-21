<?php
namespace App\Http\Services\Infor;

use App\Models\Infor;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\log;

class InforService
{

    public function create($request){
        try {
            Infor::create($request->input());
            Session::flash('success', 'Thêm mới thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm mới lỗi');
            Log::info($err->getMessage());

            return false;
        }

        return true;
    }

    public function get( $page = null ){
        return Infor::orderByDesc('id')
        ->paginate(5);
    }

    public function show($id){
        return Infor::where('id', $id)
        ->where('active', 1)
        ->orderByDesc('id')->get();
    }

    public function update($request, $infor)
    {
        try {
            $infor->fill($request->input());
            $infor->save();
            Session::flash('success', 'Cập nhật thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function delete($request){
        $infor = Infor::where('id', $request->input('id'))->first();
        if ($infor) {
            $path = str_replace('storage', 'public', $infor->thumb);
            Storage::delete($path);
            $infor->delete();
            return true;
        }
        return false;
    }

    public function more($id){
        return Infor::select('id', 'name','content','thumb')
        ->where('active', 1)
        ->where('id','!=', $id)
        ->orderByDesc('id')
        ->limit(8)
        ->get();
    }
}
