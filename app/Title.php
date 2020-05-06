<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'user_id',
                         ];



       /**
        * [users description]
        * relationship one to many with User model
        * @return [array] [description]
        */
        public function user()
        {
            return $this->belongsTo('App\User');
        }



         /**
          * [users description]
          * relationship one to many with Recording model
          * @return [array] [description]
          */
          public function recordings()
          {
              return $this->hasMany('App\Recording');
          }


}
