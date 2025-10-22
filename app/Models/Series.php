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
        'video_source',
        'description',
        'content_type',
        'text_content',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function avgRating()
    {
        return $this->reviews()->avg('rating') ?? 0;
    }

    public function ratingCount()
    {
        return $this->reviews()->count();
    }

    public function getVideoUrlAttribute()
    {
        if (!$this->video_code) {
            return null;
        }

        $source = $this->video_source ?: 'drive'; // Default to drive for legacy data

        switch ($source) {
            case 'file':
                return asset('storage/videos/' . $this->video_code);
            case 'drive':
                $driveId = $this->extractGoogleDriveId($this->video_code);
                return $driveId ? "https://drive.google.com/file/d/{$driveId}/preview" : null;
            case 'youtube':
                $youtubeId = $this->extractYouTubeId($this->video_code);
                return $youtubeId ? "https://www.youtube.com/embed/{$youtubeId}" : null;
            default:
                return null;
        }
    }

    private function extractGoogleDriveId($link)
    {
        if (preg_match('/\/d\/([a-zA-Z0-9_-]+)/', $link, $matches)) {
            return $matches[1];
        }
        return $link; // assume it's already ID
    }

    private function extractYouTubeId($url)
    {
        // Handle various YouTube URL formats
        $patterns = [
            '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
            '/youtu\.be\/([a-zA-Z0-9_-]+)/',
            '/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/',
            '/youtube\.com\/v\/([a-zA-Z0-9_-]+)/'
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return $matches[1];
            }
        }
        return $url; // assume it's already ID
    }
}
