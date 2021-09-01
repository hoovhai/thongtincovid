<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProvinceDataCovid extends Model
{
    protected $fillable = [
        'tinh',
        'tongsoca',
        'homnay',
        'tuvong'
    ];
}
