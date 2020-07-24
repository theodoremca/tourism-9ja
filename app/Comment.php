<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
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
