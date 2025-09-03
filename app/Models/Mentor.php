<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Mentor extends Model
{
    use HasFactory, HasScope, HasUuids;
    // protected $hidden = ['image'];

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
            get: fn($cover) => asset('storage/showcases/' . $cover),
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
