<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
      'user_id','content','live','posts_on'  
    ];

    protected $dates = ['posts_on','deleted_at'];

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
