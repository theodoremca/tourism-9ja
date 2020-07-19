<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image', 'tourism_place_id', 'description',
    ];

    public function tourism_places(){
        return $this->belongsToMany('App\TourismPlaces');
    }
}
