<?php

namespace App\Http\Controllers\Admin;

use App\DienBien;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class DBDichController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dienbien.add', [
            'title' => 'Tạo Diễn Biến Dịch'
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
        
        try {           
            DienBien::create($request->input());
            Session::flash('success', 'Thêm Diễn Biến Dịch thành công');
            return redirect()->back();
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm Diễn Biến Dịch lỗi');
            Log::info($err->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dienbien = DienBien::orderbyDesc('id')->paginate(5);

        return view('admin.dienbien.list', [
            'title' => 'Danh Sách',
            'dienbiens'  => $dienbien
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DienBien $id)
    {
        return view('admin.dienbien.edit', [
            'title' => 'Chỉnh Sửa',
            'dienbien'   => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,DienBien $id)
    {
        try {
            $id->fill($request->input());
            $id->save();
            Session::flash('success', 'Update Diễn Biến Dịch thành công');
            return redirect('/admin/news/show');
        } catch (\Exception $err) {
            Session::flash('error', 'Update Diễn Biến Dịch lỗi');
            Log::info($err->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = DienBien::where('id', $request->input('id'))->first();

        if ($id) {
            $id->delete();
            return response()->json([
                'error' => false,
                'message' => 'Xóa Thành Công'
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'Xóa lỗi'
        ]);
    }
}
