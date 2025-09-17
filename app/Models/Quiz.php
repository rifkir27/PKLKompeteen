<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Quiz extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'series_id',
        'question',
        'options', // JSON encoded options
        'correct_answer', // key or index of correct option
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }
}
