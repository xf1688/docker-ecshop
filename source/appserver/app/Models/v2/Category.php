<?php

namespace App\Models\v2;
use App\Models\BaseModel;

class Category extends BaseModel
{
    protected $table      = 'category';
    public    $timestamps = false;
    protected $guarded = [];

}
