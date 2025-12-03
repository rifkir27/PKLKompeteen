<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Traits\HasScope;
use App\Traits\HasSlug;

class Course extends Model
{
    use HasFactory, HasScope, HasSlug, HasUuids;

    protected $fillable = [
        'id',
        'category_id',
        'user_id',
        'mentor_id',
        'name',
        'image',
        'slug',
        'demo',
        'sort_description',
        'description',
        'learning_outcomes',
        'price_before_discount',
        'price_after_discount',
        'link_telegram',
        'link_whatsapp',
        'is_published',
        'certificate_drive_link',
        'has_certificate'
    ];

    protected $casts = [
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => asset('storage/courses/' . $image),
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function series()
    {
        return $this->hasMany(Series::class)->orderBy('number_of_series', 'ASC');
    }

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function benefits()
    {
        return $this->belongsToMany(Benefit::class);
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function tools()
    {
        return $this->belongsToMany(Tool::class);
    }

    public function favoritedByUsers()
    {
        return $this->belongsToMany(User::class, 'course_user_favorites');
    }
}
