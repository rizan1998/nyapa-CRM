<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacketName extends Model
{
    protected $fillable = ['packet_name', 'price', 'unit', 'type'];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}