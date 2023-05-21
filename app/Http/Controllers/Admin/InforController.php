<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Infor\InforService;
use App\Models\Infor;

class InforController extends Controller
{
    protected $inforService;

    public function __construct(InforService $inforService){
        $this->inforService = $inforService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.infor.list', [
            'title' => 'Danh Sách Giới Thiệu',
            'infors' => $this->inforService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infor.add', [
            'title' => 'Thêm Giới Thiệu mới'

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request, [
                'name'=> 'required',
                'thumb' => 'required'
            ]);
            $this->inforService->create($request);

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Infor $infor)
    {
        return view('admin.infor.edit', [
            'title' => 'Chỉnh Sửa Giới Thiệu',
            'infor' => $infor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infor $infor)
    {
        $this->validate($request ,[
            'name'=>'required',
            'thumb'=>'required'
        ]);
        $result = $this->inforService->update($request, $infor);
        if ($result) {
            return redirect('/admin/infors/list');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $result = $this->inforService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công tin tức'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }
}
