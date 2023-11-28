<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Started extends Model
{
    protected $table = 'started';
    protected $fillable = [
        'header',
        'details',
        'text'
    ];
}
