<?php

namespace App\Http\Controllers;

use App\DienBien;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\CrawlerContronller;
use App\Http\Services\DataCovid\DataCovidService;
use App\Http\Services\ProvinceDataCovid\ProvinceDataCovidService;

class HomeController extends Controller
{
    protected $ProvinceDataCovid;
    protected $DataCovidService;

    public function __construct()
    {
        $this->ProvinceDataCovid = new ProvinceDataCovidService;
        $this->DataCovidService  = new DataCovidService;
    }

    public function index()
    {
        $news = News::where('active', 1)->take(2)->orderbyDesc('id')->get();

        return view('home', [
            'title'         => 'Trang Chủ',
            'dataSum'       => $this->DataCovidService->get(),
            'dataTables'    => $this->ProvinceDataCovid->get(),
            'news'          => $news
        ]);
    }

    public function dienbiendich() 
    {
        $dienbien = DienBien::where('active', 1)->orderbyDesc('id')->paginate(3);

        return view('dienbien', [
            'title'     => 'Diễn Biến',
            'dienbiens' => $dienbien
        ]);
    }

    public function tintuc() 
    {
        $news = News::where('active', 1)->orderbyDesc('id')->paginate(4);
        
        return view('tintuc', [
            'title' => 'Tin Tức',
            'news'  => $news
        ]);
    }

    public function laytin(News $id) 
    {
        return view('tintucchitiet', [
            'title' => 'Tin Tức 2',
            'new' => $id
        ]);
    }

    public function test() 
    {
        return view('test', [
            'title' => 'test'
            
        ]);
    }
}
