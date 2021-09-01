<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DienBien extends Model
{
    protected $fillable = [
        'time',
        'content',
        'active'
    ];
}
