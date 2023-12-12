<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['packet_name_id', 'name', 'icon'];

    public function packetName()
    {
        return $this->belongsTo(PacketName::class);
    }

    public function icon()
    {
        return $this->belongsTo(Icons::class, 'icon', 'icon_name');
    }
}
