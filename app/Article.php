<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\ArticleRevision;

class Article extends Model
{
    use SoftDeletes;

    public function revision(){
        return $this->belongsTo(ArticleRevision::class,'revision_id');
    }
}
