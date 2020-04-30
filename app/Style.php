<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',];


    /**
     * [users description]
     * relationship many to many with User model
     * @return [array] [description]
     */
     public function users()
     {
         return $this->belongsToMany('App\User');
     }
}
