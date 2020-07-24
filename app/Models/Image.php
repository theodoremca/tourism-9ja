<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'image', 'tourism_place_id', 'description',
    ];

    public function tourism_places(){
        return $this->belongsToMany('App\TourismPlaces');
    }

}
