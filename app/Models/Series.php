<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Series extends Model
{
    use HasFactory, HasSlug, HasUuids;

    protected $fillable = [
        'id',
        'course_id', 
        'title', 
        'number_of_series', 
        'intro', 
        'video_code',
        'description'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function avgRating()
    {
        return $this->reviews()->avg('rating') ?? 0;
    }

    public function ratingCount()
    {
        return $this->reviews()->count();
    }
}
