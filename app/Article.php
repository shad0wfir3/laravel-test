<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\ArticleRevision;

class Article extends Model
{
    use SoftDeletes;

    protected $casts = [
        'published' => 'boolean',
    ];

    protected $dates = [
        'published_date'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function revision(){
        return $this->belongsTo(ArticleRevision::class,'revision_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(){
        return $this->belongsToMany(Tag::class,'articles_tags','article_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(){
        return $this->belongsToMany(Category::class,'articles_categories','article_id');
    }

    public function revision_list(){
        return $this->hasMany(ArticleRevision::class,'article_id');
    }
}
