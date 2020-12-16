<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{

    use SoftDeletes;

    protected $table = "staffs";
    protected $fillable = [
        'name',
        'age',
        'address',
        'phone',
        'status'
    ];
}
