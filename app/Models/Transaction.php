<?php

namespace App\Models;

use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Transaction extends Model
{
    use HasFactory, HasScope, HasUuids;

    protected $fillable = [
        'id',
        'user_id', 
        'invoice', 
        'name', 
        'status', 
        'phone_number',
        'grand_total', 
        'snap_token'
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
