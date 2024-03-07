<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\RedeemedVoucher;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function showRedeemForm()
    {
        return view('member.voucher.redeem');
    }

    public function redeem(Request $request)
    {
        $request->validate([
            'voucher_code' => 'required|exists:vouchers,code',
        ]);

        $voucher = Voucher::where('code', $request->voucher_code)->first();

        // Periksa apakah voucher sudah pernah diredeem oleh pengguna
        $redeemedVoucher = RedeemedVoucher::where('user_id', auth()->user()->id)
            ->where('voucher_id', $voucher->id)
            ->first();

        if ($redeemedVoucher) {
            return redirect()->back()->with('error', 'Anda sudah menukarkan voucher tersebut.');
        }

        // Periksa apakah voucher masih aktif dan belum kedaluwarsa
        if ($voucher->active && (!$voucher->expiry_date || $voucher->expiry_date >= now())) {
            // Kurangi jumlah penggunaan voucher jika usage_limit tidak null
            if ($voucher->usage_limit !== null && $voucher->usage_limit > 0) {
                $voucher->usage_limit--;
                $voucher->save();
            } elseif ($voucher->usage_limit === 0) {
                return redirect()->back()->with('error', 'Voucher ini telah mencapai batas penggunaannya.');
            }


            // Simpan data redeem voucher
            RedeemedVoucher::create([
                'user_id' => auth()->user()->id,
                'voucher_id' => $voucher->id,
                'redeemed_at' => now(),
            ]);

            return redirect()->back()->with('success', 'Voucher berhasil di tukarkan.');
        } else {
            return redirect()->back()->with('error', 'Invalid atau voucher sudah kadaluarsa.');
        }
    }
}
