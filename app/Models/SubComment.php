<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

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

    public function SubCommentValidator($request)
    {
        $data = array(
            'comment' => $request['comment'],
            'tourism_place_id' => $request['tourism_place_id'],
            'user_id' => $request['user_id'],
            'comment_id' => $request['comment_id'],
        );

        $rules = array(
            'comment' => ['required', 'string'],
            'tourism_place_id' => ['integer'],
            'user_id' => ['integer'],
            'comment_id' => ['integer'],
        );

        $message = array(
            'required' => 'The :attribute field cannot be blank.',
            'string' => 'The :attribute must be a string.',
            'integer' => 'The :attribute must be an integer.',
        );
        return Validator::make($data, $rules, $message);
    }
}
