<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Mentor extends Model
{
    use HasFactory, HasScope; // Hapus HasUuids karena pakai $table->id()

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
            get: fn($cover) => $cover ? asset('storage/showcases/' . $cover) : asset('images/default.png'),
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
