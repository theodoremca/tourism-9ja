<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

class Image extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'image', 'tourism_place_id', 'description',
    ];

    public function tourism_places(){
        return $this->belongsToMany('App\TourismPlaces');
    }

    public function ImageValidator($request)
    {
        $data = array(
            'description' => $request['description'],
            'tourism_place_id' => $request['tourism_place_id'],
            'image' => $request['image'],
        );

        $rules = array(
            'comment' => ['required', 'string'],
            'tourism_place_id' => ['integer'],
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
