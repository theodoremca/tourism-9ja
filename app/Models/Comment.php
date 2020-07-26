<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

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

    public function CommentValidator($request)
    {
        $data = array(
            'comment' => $request['comment'],
            'tourism_place_id' => $request['tourism_place_id'],
            'user_id' => $request['user_id'],
            'image' => $request['image'],
        );

        $rules = array(
            'comment' => ['required', 'string'],
            'tourism_place_id' => ['integer'],
            'user_id' => ['integer'],
            'image' => ['exclude_if:image,""','max:255', 'image', 'file'],
        );

        $message = array(
            'required' => 'The :attribute field cannot be blank.',
            'image' => 'The :attribute must be an image.',
            'file' => 'The :attribute must be an file.',
            'string' => 'The :attribute must be a string.',
            'max' => 'The :attribute cannot not be greater than :max.',
            'integer' => 'The :attribute must be an integer.',
        );
        return Validator::make($data, $rules, $message);
    }
}
