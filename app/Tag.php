<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    public function articles(){

        return $this->belongsToMany(Article::class,'articles_tags','tag_id');
    }
}
