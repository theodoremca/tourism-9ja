<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

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

    public function TourismPlacesValidator($request)
    {
        $data = array(
            'name' => $request['name'],
            'address' => $request['address'],
            'state' => $request['state'],
            'country' => $request['country'],
            'type' => $request['type'],
            'image' => $request['image'],
        );

        $rules = array(
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'state' => ['exclude_if:state,""','string'],
            'country' => ['required', 'string'],
            'type' => ['required', 'string'],
            'image' => ['exclude_if:image,""','max:255', 'image', 'file'],
        );

        $message = array(
            'required' => 'The :attribute field cannot be blank.',
            'image' => 'The :attribute must be an image.',
            'file' => 'The :attribute must be an file.',
            'string' => 'The :attribute must be a string.',
            'max' => 'The :attribute cannot not be greater than :max.',
        );
        return Validator::make($data, $rules, $message);
    }
}
