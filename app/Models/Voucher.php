<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'amount',
        'usage_limit',
        'expiry_date',
        'active'
    ];

    public function scopeValid($query, $voucherCode)
    {
        return $query->where('code', $voucherCode)
            ->where('active', true)
            ->where(function ($query) {
                $query->whereNull('expiry_date')
                    ->orWhere('expiry_date', '>=', now());
            });
    }

    // Method untuk memeriksa apakah voucher bisa digunakan oleh pengguna tertentu
    public function canBeRedeemedByUser($user)
    {
        /// Jika usage_limit tidak diisi, maka voucher tidak memiliki batas pengguna
        if ($this->usage_limit === null) {
            return !$user->redeemedVouchers()->where('voucher_id', $this->id)->exists();
        }   
        // Jika usage_limit diisi, maka cek apakah sudah melebihi batas pengguna
        return $user->redeemedVouchers()->where('voucher_id', $this->id)->count() < $this->usage_limit;
    }
}
