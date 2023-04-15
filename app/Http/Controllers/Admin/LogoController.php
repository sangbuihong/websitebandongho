<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;
use App\Http\Services\Logo\LogoService;

class LogoController extends Controller
{

    protected $logo;

    public function __construct(LogoService $logo){
        $this->logo = $logo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.logo.list', [
            'title' => 'Danh Sách Logo',
            'logos' =>$this->logo->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logo.add', [
            'title'=>'Thêm Logo '
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
        $this->validate($request, [
            'name'=> 'required',
            'thumb' => 'required',
            'url' => 'required'
        ]);

        $this->logo->insert($request);

       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        return view('admin.logo.edit',[
            'title' => 'Chỉnh sửa Logo ',
            'logo' => $logo
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
    public function update(Request $request, Logo $logo)
    {
        $this->validate($request ,[
            'name'=>'required',
            'thumb'=>'required',
            'url'=>'required'
        ]);

        $result = $this->logo->update($request, $logo);
        if ($result) {
            return redirect('/admin/logos/list');
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
        $result = $this->logoService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công logo'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }
}
