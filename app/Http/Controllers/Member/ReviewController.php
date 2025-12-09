<?php

namespace App\Http\Controllers\Member;

use App\Models\Course;
use App\Models\Mentor;
use App\Models\MentorRating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request, Course $course)
    {
        // Save or update course review
        $course->reviews()->updateOrCreate([
            'user_id' => $request->user()->id,
        ],[
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        /**
         * =============================
         *   MENTOR RATING (optional)
         * =============================
         */
        if ($request->filled('mentor_rating')) {

            // Save/update mentor rating
            MentorRating::updateOrCreate([
                'mentor_id' => $course->mentor_id,
                'user_id'   => $request->user()->id,
            ], [
                'rating'  => $request->mentor_rating,
                'reviews' => $request->review,
            ]);

            // Recalculate mentor rating summary
            $mentor = Mentor::find($course->mentor_id);

            $mentor->rating_total = MentorRating::where('mentor_id', $mentor->id)->sum('rating');
            $mentor->rating_count = MentorRating::where('mentor_id', $mentor->id)->count();
            $mentor->rating_average = $mentor->rating_count
                ? $mentor->rating_total / $mentor->rating_count
                : 0;

            $mentor->save();
        }

        return back()->with('toast_success', 'Review Created');
    }
}
