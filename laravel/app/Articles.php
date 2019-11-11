<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //

    public function authors()
    {
        return $this->belongsToMany('App\Authors', 'articles_authors', 'article_id', 'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Categories', 'articles_categories', 'article_id', 'category_id');
    }

    public function source()
    {
        return $this->belongsTo('App\Sources', 'source_id');
    }
}