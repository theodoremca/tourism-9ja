<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'tourism_place_id', 'user_id', 'image'
    ];

    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function tourism_places(){
        return $this->belongsToMany('App\TourismPlaces');
    }
}
