<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ButtonLink extends Model
{
    protected $table = 'buttonlink';
    protected $fillable = [
        'link'
    ];
}
