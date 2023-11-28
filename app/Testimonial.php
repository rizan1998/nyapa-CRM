<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
    protected $fillable = [
        'quote',
        'name',
        'job',
        'images'
    ];
}
