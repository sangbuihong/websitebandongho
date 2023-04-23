<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Logo\LogoService;
use App\Http\Services\Blog\BlogService;

class IndexController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;
    protected $logo;
    protected $blog;

    public function __construct(SliderService $slider, MenuService $menu,
    ProductService $product, LogoService $logo, BlogService $blog){
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
        $this->logo = $logo;
        $this->blog = $blog;

    }

    public function index(){
        return view('home',[
            'title'=>'Shop Đồng Hồ',
            'sliders' =>$this->slider->show(),
            'menus' =>$this->menu->show(),
            'products'=>$this->product->get(),
            'logos'=>$this->logo->show(),
            'blogs'=>$this->blog->get()
        ]);
    }

    public function loadProduct(Request $request){
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        if (count ($result) != 0) {
            $html = view('products.list',['products'=>$result])->render();

            return response()->json([
                'html' => $html
            ]);
        }
        return response()->json([
            'html' =>''
        ]);
    }
}
