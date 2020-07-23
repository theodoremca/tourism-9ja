<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubComment extends Model
{
    protected $fillable = [
        'comment', 'tourism_place_id', 'user_id', 'comment_id'
    ];

    public function comment(){
        return $this->belongsToMany('App\Comment');
    }

    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function tourism_places(){
        return $this->belongsToMany('App\TourismPlaces');
    }
}
