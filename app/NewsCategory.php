<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'name',
    'description',
    'icon_image',
    'image_path',
  ];
}
