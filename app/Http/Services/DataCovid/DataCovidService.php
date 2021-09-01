<?php

namespace App\Http\Services\DataCovid;

use App\Slider;
use App\SumDataCovid;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class DataCovidService 
{
    public function get()
    {
        $rs = SumDataCovid::latest()->first();
        //dd($rs);
        return $rs;
        
    }


    public function getAll()
    {
        $rs = SumDataCovid::get();
        //dd($rs);
        return $rs;
    }
}