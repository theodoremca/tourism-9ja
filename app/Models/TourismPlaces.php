<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourismPlaces extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'address', 'state', 'country', 'type', 'image',
    ];

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function sub_comments(){
        return $this->hasMany('App\SubComment');
    }

}
