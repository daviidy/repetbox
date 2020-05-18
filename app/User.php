<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'city',
        'interest',
        'image',
        'mobile_tel',
        'bio',
        'references',
        'zip',
        'country',
        'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    public function isAdmin()    {
        return $this->type === self::ADMIN_TYPE;
    }



    /**
     * [users description]
     * relationship one to many with Purchase model
     * @return [array] [description]
     */
     public function purchases()
     {
         return $this->hasMany('App\Purchase');
     }

     /**
      * [users description]
      * relationship many to many with Skill model
      * @return [array] [description]
      */
      public function skills()
      {
          return $this->belongsToMany('App\Skill')->withPivot('value');
      }

      /**
       * [users description]
       * relationship many to many with Instrument model
       * @return [array] [description]
       */
       public function instruments()
       {
           return $this->belongsToMany('App\Instrument');
       }

       /**
        * [users description]
        * relationship many to many with Style model
        * @return [array] [description]
        */
        public function styles()
        {
            return $this->belongsToMany('App\Style');
        }


        /**
         * [users description]
         * relationship many to many with Recording model
         * @return [array] [description]
         */
         public function recordings()
         {
             return $this->belongsToMany('App\Recording');
         }


         /**
          * [users description]
          * relationship many to many with Recording model
          * @return [array] [description]
          */
          public function recordingsOne()
          {
              return $this->hasMany('App\Recording');
          }


          /**
          * [users description]
          * relationship many to many with Video model
          * @return [array] [description]
          */
          public function videos()
          {
              return $this->hasMany('App\Video');
          }





}
