<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Life extends Model
{   
    
    protected $fillable = ['title', 'status', 'image', 'slug', 'embed_code', 'description', 'featured', 'meta_description', 'meta_keywords', 'category_id', 'board', 'class', 'subject', 'updated_at', 'created_at'];
    
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Category::class');
    }
}
