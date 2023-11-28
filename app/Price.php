<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';

    protected $fillable = [
        'packet_name',
        'price',
        'unit',
        'type',
        'feature'
    ];
};
