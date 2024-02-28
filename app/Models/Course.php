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
        'name',
        'image',
        'slug',
        'demo',
        'sort_description',
        'description', 
        'price_before_discount',
        'price_after_discount',
        'meta_keywords',
        'meta_description',
        'link_telegram',
        'link_whatsapp',
        'is_published'
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
}
