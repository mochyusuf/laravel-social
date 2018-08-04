<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
      'user_id','content','live','posts_on'  
    ];

    public function setLiveAttribute($value){
        $this->attributes['live'] = (boolean)($value);
    }

    public function getShortContentAttribute(){
        return substr($this->content,0,20)."....";
    }
}
