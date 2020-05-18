<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recording extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'audio_file',
                           'video_file',
                           'user_id',
                           'style_id',
                           'title_id',
                           'tempo',
                         ];


     /**
      * [users description]
      * relationship one to many with Style model
      * @return [array] [description]
      */
      public function style()
      {
          return $this->belongsTo('App\Style');
      }

      /**
       * [users description]
       * relationship one to many with Title model
       * @return [array] [description]
       */
       public function title()
       {
           return $this->belongsTo('App\Title');
       }

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
         * relationship many to many with User model
         * @return [array] [description]
         */
         public function users()
         {
             return $this->belongsToMany('App\User');
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


         /**
          * [users description]
          * relationship one to many with Media model
          * @return [array] [description]
          */
          public function medias()
          {
              return $this->hasMany('App\Media');
          }


}
