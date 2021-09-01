<?php

namespace App\Http\Controllers\Admin;

    use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        return view('admin.news.add', [
            'title' => 'Tạo Tin Tức'
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
            News::create($request->input());
            Session::flash('success', 'Tạo Tin Tức thành công');
            return redirect()->back();
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo Tin Tức lỗi');
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
        $news = News::orderbyDesc('id')->paginate(2);

        return view('admin.news.list', [
            'title' => 'Danh Sách',
            'news'  => $news
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $id)
    {
        return view('admin.news.edit', [
            'title' => 'Chỉnh Sửa',
            'new'   => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,News $id)
    {
        try {
            $id->fill($request->input());
            $id->save();
            Session::flash('success', 'Update Tin Tức thành công');
            return redirect('/admin/news/show');
        } catch (\Exception $err) {
            Session::flash('error', 'Update Tin Tức lỗi');
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
        $id = News::where('id', $request->input('id'))->first();

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
