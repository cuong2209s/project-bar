<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drink extends Model
{
    use SoftDeletes;
    protected $table = 'drinks';
    protected $fillable = [
        'name',
        'category_id',
        'expiry_date',
        'quantity'
    ];

}
