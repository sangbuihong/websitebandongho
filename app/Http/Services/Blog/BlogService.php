<?php
namespace App\Http\Services\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\log;

class BlogService
{

    public function create($request){
        try {
            Blog::create($request->input());
            Session::flash('success', 'Thêm blog mới thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm blog lỗi');
            Log::info($err->getMessage());

            return false;
        }

        return true;
    }

    public function get( $page = null ){
        return Blog::orderByDesc('id')
        ->paginate(10);
    }

    public function show($id){
        return Blog::where('id', $id)
        ->where('active', 1)
        ->orderByDesc('id')->get();
    }

    public function update($request, $blog)
    {
        try {
            $blog->fill($request->input());
            $blog->save();
            Session::flash('success', 'Cập nhật thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function delete($request){
        $blog = Blog::where('id', $request->input('id'))->first();
        if ($blog) {
            $path = str_replace('storage', 'public', $blog->thumb);
            Storage::delete($path);
            $blog->delete();
            return true;
        }
        return false;
    }

    public function more($id){
        return Blog::select('id', 'name','description','content','thumb')
        ->where('active', 1)
        ->where('id','!=', $id)
        ->orderByDesc('id')
        ->limit(8)
        ->get();
    }
    public function mores($id){
        return Blog::select('id', 'name','description','content','thumb')
        ->where('active', 1)
        ->where('id', $id)
        ->orderByDesc('id')
        ->limit(8)
        ->get();
    }
}
