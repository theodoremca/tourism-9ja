<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubComment extends Model
{
    use SoftDeletes;
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
