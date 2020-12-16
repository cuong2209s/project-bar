<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryDrink extends Model
{
    use SoftDeletes;

    protected $table = "category_drinks";
    protected $fillable = [
        'name'
    ];
}
