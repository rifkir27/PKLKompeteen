<?php

namespace App\Models;

use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Review extends Model
{
    use HasFactory, HasScope, HasUuids;

    protected $fillable = [
        'id',
        'course_id', 
        'series_id',
        'user_id', 
        'rating', 
        'review',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
