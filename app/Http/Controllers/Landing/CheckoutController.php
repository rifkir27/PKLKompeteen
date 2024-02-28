<?php

namespace App\Http\Controllers\Landing;

use Midtrans\Snap;
use App\Models\Cart;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notifications\NewTransaction;
use Illuminate\Support\Facades\Notification;
use Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        \Midtrans\Config::$serverKey    = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized  = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds        = config('services.midtrans.is3ds');
    }

    public function store(Request $request)
    {
        $carts = $request->user()->carts()->get();

        if(count($carts) < 1) {
            return redirect(route('home'))->with('toast_error', 'Anda belum memilih course, silakan pilih course terlebih dahulu.');
        }

        $length = 10;
        $random = '';
    
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }

        $no_invoice = 'EDT-'.Str::upper($random);

        $grand_total = $carts->sum('price');

        $invoice = Transaction::create([
            'invoice' => $no_invoice,
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'grand_total' => $grand_total,
            'phone_number' => $request->phone_number,
            'status' => $grand_total > 0 ? 'pending' : 'success',
        ]);

        $carts = Cart::where('user_id', $request->user()->id);

        foreach($carts->get() as $cart){
            $invoice->details()->create([
                'course_id' => $cart->course_id,
                'price' => $cart->price
            ]);
        }

        $carts->delete();

        return redirect()->route('checkout', $invoice->id);
    }

    public function checkout($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);   

        if(Auth::user()->id != $transaction->user_id) {
            return redirect()->route('home');
        }
        return view('landing.cart.checkout', compact('transaction'));
    }
}