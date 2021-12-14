<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = [
      'name',
      'description',
      'icon_image',
      'image_path',
    ];
}
