<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icons extends Model
{
    protected $table = 'icons';
    protected $fillable = [
        'icon_name',
        'icon_code'
    ];

    public function socials()
    {
        return $this->hasMany(Social::class, 'icon_id');
    }

    public function ServiceCard()
    {
        return $this->hasMany(ServiceCard::class, 'icon_id');
    }

}
