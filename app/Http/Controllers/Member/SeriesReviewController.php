<?php

namespace App\Http\Controllers\Member;

use App\Models\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesReviewRequest;

class SeriesReviewController extends Controller
{
    public function store(SeriesReviewRequest $request, Series $series)
    {
        $series->reviews()->updateOrCreate([
            'user_id' => $request->user()->id,
            'series_id' => $series->id,
        ], [
            'rating' => $request->rating,
            'review' => $request->review,
            'course_id' => $series->course_id,
        ]);

        return back()->with('toast_success', 'Lesson Review Created');
    }

    public function update(SeriesReviewRequest $request, Series $series)
    {
        $review = $series->reviews()
            ->where('user_id', $request->user()->id)
            ->first();

        if ($review) {
            $review->update([
                'rating' => $request->rating,
                'review' => $request->review,
            ]);

            return back()->with('toast_success', 'Lesson Review Updated');
        }

        return back()->with('toast_error', 'Review not found');
    }

    public function destroy(Request $request, Series $series)
    {
        $review = $series->reviews()
            ->where('user_id', $request->user()->id)
            ->first();

        if ($review) {
            $review->delete();
            return back()->with('toast_success', 'Lesson Review Deleted');
        }

        return back()->with('toast_error', 'Review not found');
    }
}
