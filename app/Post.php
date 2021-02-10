<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function postInformation(){
        return $this->hasOne('App\PostInformation');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
    }

    protected $fillable = ['title', 'user_id', 'category_id'];


}