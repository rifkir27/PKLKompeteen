<?php

namespace App\Models;

use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Infrastructure extends Model
{
    use HasFactory, HasScope;

    protected $fillable = [
        'name',
        'description',
        'image'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
