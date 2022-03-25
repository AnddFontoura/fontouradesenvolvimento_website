<?php

namespace App\Http\Helpers;

use App\News;
use App\NewsCategory;

class Helper
{
    static function getAllNewsCategories()
    {
        return NewsCategory::orderBy('name','asc')
            ->get();
    }

    static function getLastFiveNews()
    {
        return News::orderBy('id', 'desc')
            ->limit(5)
            ->get();
    }
}