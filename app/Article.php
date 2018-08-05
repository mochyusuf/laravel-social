<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable = [
      'user_id','content','live','posts_on'  
    ];

    protected $dates = ['posts_on'];

    public function setLiveAttribute($value){
        $this->attributes['live'] = (boolean)($value);
    }

    public function getShortContentAttribute(){
        return substr($this->content,0,20)."....";
    }

    public function setPostsOnAttribute($value){
        $this->attributes['posts_on'] = Carbon::parse($value);
    }
}
