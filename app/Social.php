<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social';
    protected $fillable = [
        'icon_id',
        'social',
        'link'
    ];
    public function icon()
    {
        return $this->belongsTo(Icons::class, 'icon_id');
    }
}
