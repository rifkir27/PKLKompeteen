<?php

namespace App\Models;

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

    public function mentorRatings()
    {
        return $this->hasMany(MentorRating::class);
    }

    protected function cover(): Attribute
    {
        return Attribute::make(
            get: fn($cover) => $cover 
                ? asset('storage/showcases/' . $cover) 
                : asset('assets/dist/img/default-150x150.png'),
        );
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
