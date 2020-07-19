<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'permission', 'role_id',
    ];

    public function role(){
        return $this->belongsToMany('App\Role');
    }
}
