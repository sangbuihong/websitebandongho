<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Cart;


class MainController extends Controller
{
    public function index(){
        $pr = Product::all()->count();
        $bl = Blog::all()->count();
        $sl = Slider::all()->count();
        $ca = Cart::all()->count();
        return view('admin.home',[
            'title' => 'Trang Quản Trị Admin',
            'product'=>$pr,
            'blog'=>$bl,
            'slider'=>$sl,
            'cart'=>$ca,
        ]);
    }

}
