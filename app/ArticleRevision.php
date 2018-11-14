<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleRevision extends Model
{
    use SoftDeletes;

    public function article(){
        return $this->hasOne(Article::class,'revision_id');
    }

}
