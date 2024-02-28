<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Photo extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'course_id',
        'name',
        'photo'
    ];
}
