<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
 * [protected description]
 * @var [array]
 */
protected $fillable = [
                       'audio_file',
                       'video_file',
                       'user_id',
                       'recording_id'
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

  /**
   * [users description]
   * relationship one to many with User model
   * @return [array] [description]
   */
   public function user()
   {
       return $this->belongsTo('App\User');
   }



}
