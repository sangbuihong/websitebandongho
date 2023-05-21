<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Infor\InforService;

class InforsController extends Controller
{
    protected $inforService;


    public function __construct(InforService $inforService){
        $this -> inforService = $inforService;
    }

    public function index($id=''){
        $infor = $this->inforService->show($id);
        $inforMore =$this->inforService->more($id);
       return view('infors.content', [
        'title'=> 'Giới Thiệu',
        'infor'=> $infor,
        'infors'=>$inforMore
       ]);
    }

}
