<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Blog\BlogService;

class BlogsController extends Controller
{
    protected $blogService;


    public function __construct(BlogService $blogService){
        $this -> blogService = $blogService;
    }

    public function index($id=''){
        $blog = $this->blogService->show($id);
        $blogMore =$this->blogService->more($id);
       return view('blogs.content', [
        'title'=> 'Tin Tức',
        'blog'=> $blog,
        'blogs'=>$blogMore
       ]);
    }

    public function shows($id='', $slug=''){
        $blog = $this->blogService->show($id);
        $blogMore =$this->blogService->mores($id);
        return view('blogs.detail',[
            'title'=>'tin túc',
            'blog'=> $blog,
            'blogs'=>$blogMore
        ]);
    }
}
