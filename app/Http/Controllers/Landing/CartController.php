<?php

namespace App\Http\Controllers\Landing;

use App\Models\Cart;
use App\Models\Course;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $carts = $request->user()->carts()->get();
        $total = $carts->sum('price');
        $user = $request->user();

        return view('landing.cart.index', compact('carts', 'total', 'user'));
    }

    public function store(Request $request, Course $course)
    {
        // Check if user has already purchased this course
        $alreadyBought = Transaction::where('user_id', $request->user()->id)
            ->where('status', 'success')
            ->whereHas('details', function($query) use($course) {
                $query->where('course_id', $course->id);
            })
            ->exists();

        if ($alreadyBought) {
            return redirect()->back()->with('toast_error', 'Anda sudah membeli kursus ini sebelumnya.');
        }

        $course->carts()->updateOrCreate([
            'user_id' => $request->user()->id,
            'course_id' => $course->id,
        ],[
            'user_id' => $request->user()->id,
            'price' => $course->price_after_discount
        ]);

        return redirect(route('cart.index'))->with('toast_success', 'Item berhasil ditambahkan ke cart');
    }

    public function delete(Cart $cart)
    {
        $cart->delete();

        return back()->with('toast_success', 'Item berhasil dihapus dari cart');
    }
}