<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleRevision extends Model
{
    use SoftDeletes;

    protected $fillable = ['author_id','content','featured_image_id','article_id'];

    public function article(){
        return $this->hasOne(Article::class,'revision_id');
    }

}
