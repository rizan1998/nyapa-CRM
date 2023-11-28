<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCard extends Model
{
    protected $table = 'service_card';
    protected $fillable = [
        'icon_id',
        'title',
        'detail'
    ];

    public function icon()
    {
        return $this->belongsTo(Icons::class, 'icon_id');
    }
}
