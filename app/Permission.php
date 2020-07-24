<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'permission', 'role_id',
    ];

    public function role(){
        return $this->belongsToMany('App\Role');
    }

}
