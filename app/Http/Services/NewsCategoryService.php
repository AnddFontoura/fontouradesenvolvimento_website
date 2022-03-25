<?php

namespace App\Http\Services;

use App\NewsCategory;

class NewsCategoryService
{
    static function getAllNewsCategories()
    {
        return NewsCategory::get();
    }
}