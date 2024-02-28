<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class TransactionDetail extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'transaction_id', 
        'course_id', 
        'price',
        'series_checked'
    ];

    protected $casts = [
        'series_checked' => 'array'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
