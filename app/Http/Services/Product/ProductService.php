<?php
namespace App\Http\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Session;


class ProductService
{
    const LIMIT = 16;



    public function create($request){
        try{
            Product::create([
                'name'=>(string) $request->input('name'),

            ]);

            Session::flash('success', 'Tạo danh mục thành công');
        }catch(\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function get( $page = null ){
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->orderByDesc('id')
        ->when( $page != null, function($query) use ($page){
            $query->offset($page * self::LIMIT);
        })
        ->limit(self::LIMIT)
        ->get();
    }

    public function show($id){
        return Product::where('id', $id)
        ->where('active', 1)
        ->with('menu')
        ->firstOrFail();
    }
    public function more($id){
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->where('active', 1)
        ->where('id','!=', $id)
        ->orderByDesc('id')
        ->limit(8)
        ->get();
    }
    public function shows($id){
        return Product::where('id', $id)
        ->where('active', 1)
        ->orderByDesc('id')->get();
    }
    public function mores($id){
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->where('active', 1)
        ->where('id', $id)
        ->orderByDesc('id')
        ->limit(8)
        ->get();
    }
    
}
