<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'Hero';
    protected $fillable = [
        'header',
        'details',
        'image1',
        'image2'
    ];

}
