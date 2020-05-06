<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                         ];


     /**
      * [users description]
      * relationship one to many with Recording model
      * @return [array] [description]
      */
      public function recording()
      {
          return $this->belongsTo('App\Recording');
      }
}
