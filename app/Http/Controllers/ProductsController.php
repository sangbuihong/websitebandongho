<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;

class ProductsController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService){
        $this -> productService = $productService;
    }

    public function index($id='', $slug=''){
        $product = $this->productService->show($id);
        $productsMore = $this->productService->more($id);
        return view('products.content',[
            'title'=> $product->name,
            'product'=>$product,
            'products'=>$productsMore
        ]);

    }
    public function list($id='', $slug=''){
        $product = $this->productService->show($id);
        $productsMore = $this->productService->more($id);
        return view('products.contents',[
            'title'=> $product->name,
            'product'=>$product,
            'products'=>$productsMore
        ]);

    }
    public function shows($id='', $slug=''){
        $product = $this->productService->shows($id);
        $productsMore =$this->productService->mores($id);
        return view('products.quick',[
            'title'=>'sdf',
            'product'=> $product,
            'products'=>$productsMore
        ]);
    }
}
