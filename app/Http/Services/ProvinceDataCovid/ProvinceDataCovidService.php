<?php

namespace App\Http\Services\ProvinceDataCovid;
use App\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\ProvinceDataCovid;

class ProvinceDataCovidService 
{
    public function get()
    {
        $rs = ProvinceDataCovid::latest()->take(62)->get();

        //dd($rs);
        return $rs;
    }

    public function getAll()
    {
        $rs = ProvinceDataCovid::get();

        //dd($rs);
        return $rs;
    }
}