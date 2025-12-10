<?php

namespace App\Models;

use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    use HasFactory, HasScope;

    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function mentorRatings()
    {
        return $this->hasMany(MentorRating::class);
    }

    public function getCoverAttribute()
    {
        return $this->courses()
            ->join('reviews', 'courses.id', '=', 'reviews.course_id')
            ->avg('reviews.rating') ?? 0;
    }

    public function getTotalRatingAttribute()
    {
        return $this->mentorRatings()->sum('rating');
    }

    public function getAvgMentorRatingAttribute()
    {
        return round($this->mentorRatings()->avg('rating') ?? 0, 1);
    }

    public function getCountMentorRatingAttribute()
    {
        return $this->mentorRatings()->count();
    }
}
