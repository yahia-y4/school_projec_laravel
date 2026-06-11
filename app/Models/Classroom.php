<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'name',
        'capacity',
        'description',
    ];

    protected $casts = [
    'capacity' => 'integer',
];
}
