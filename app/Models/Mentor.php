<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    protected function cover(): Attribute
    {
        return Attribute::make(
            get: fn($cover) => $cover ? asset('storage/showcases/' . $cover) : asset('assets/dist/img/default-150x150.png'),
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mentorRatings()
    {
        return $this->hasMany(MentorRating::class);
    }

    public function getAvgRatingAttribute()
    {
        // Use loaded data if available, otherwise query
        if ($this->relationLoaded('courses') && $this->courses->isNotEmpty()) {
            $totalRating = 0;
            $totalReviews = 0;
            foreach ($this->courses as $course) {
                if ($course->relationLoaded('reviews') && $course->reviews->isNotEmpty()) {
                    $totalRating += $course->reviews->sum('rating');
                    $totalReviews += $course->reviews->count();
                }
            }
            return $totalReviews > 0 ? $totalRating / $totalReviews : 0;
        }

        // Fallback to query if data not loaded
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
        return $this->mentorRatings()->avg('rating') ?? 0;
    }
}
