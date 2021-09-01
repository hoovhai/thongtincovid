<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SumDataCovid extends Model
{
    
    protected $fillable = [
        'socanhiemvn',
        'dangdieutrivn',
        'khoivn',
        'chetvn',
        'socanhiemtg',
        'dangdieutritg',
        'khoitg',
        'chettg'
    ];
}
