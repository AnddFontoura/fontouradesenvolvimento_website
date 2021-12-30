<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use softDeletes;

    protected $fillable = [
        'user_id',
        'news_category_id',
        'title',
        'description',
        'header_image',
        'footer_image',
    ];

    public function newCategory(): hasOne
    {
        return $this->hasOne(NewsCategory::class, 'id', 'news_category_id');
    }

    public function user(): hasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
