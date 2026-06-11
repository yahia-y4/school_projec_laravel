<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        "name",
        "email",
        "birth_date",
        "phone",
        "classroom_id",
    ];
}
