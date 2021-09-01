<?php

namespace App\Http\Controllers;

use App\ProvinceDataCovid;
use App\SumDataCovid;
use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;

class CrawlerController extends Controller
{
    public $html_home;

    public function __construct()
    {
        $html = HtmlDomParser::file_get_html('https://ncov.moh.gov.vn/vi/web/guest/trang-chu',false, null, 0 );

        $this->html_home = $html;

        $this->getSumDATA();
        $this->getDATA_table();
    }

    public function index()
    {
        echo 1;
    }

    public function getSumDATA()
    {
        $result = [];

        $resultData = [
            'socanhiemvn'   => '',
            'dangdieutrivn' => '',
            'khoivn'        => '',
            'chetvn'        => '',
            'socanhiemtg'   => '',
            'dangdieutritg' => '',
            'khoitg'        => '',
            'chettg'        => ''
        ];

        $htmls = $this->html_home->find('.col-lg-12 .box-tke-V3 .mt-5 .text-uppercase span.font24'); //lấy dữ liệu tổng ncov từ trang chủ ncov

        foreach ($htmls as $html)
        {
            $text = $html->innertext();

            $result[] = $text; //tách dữ liệu lưu vào mảng $result
        }

        $i = 0;
        foreach ($resultData as $key => $value)
        {
            $resultData[$key] = $result[$i]; //thêm dữ liệu đã tách được vào mảng
            $i++;
        }
        
        SumDataCovid::create($resultData);
    }

    public function getDATA_table()
    {
        $get = [];

        $result = [];

        $htmls = $this->html_home->find('.bg-xam .container .table-responsive .table-striped tr td'); //lấy dữ liệu ncov từ trang chủ ncov

        
        foreach ($htmls as $html)
        {
            $text = $html->innertext();

            $get[] = $text; //tách dữ liệu lưu vào mảng $get
        }

        $count =  count($get) / 4;

        $x = 0;
        for($y = 0; $y < $count; $y++)
        {
            for ($x; $x < $y * 4; $x++)
            {
                $result[$y][] = $get[$x];
            }
        }

        $countRS = count($result);

        for ($i = 1; $i <= $countRS; $i++)
        {
                ProvinceDataCovid::create([
                'tinh'      => $result[$i][0],
                'tongsoca'  => $result[$i][1],
                'homnay'    => $result[$i][2],
                'tuvong'    => $result[$i][3]
                ]);
        }
    }   
}
