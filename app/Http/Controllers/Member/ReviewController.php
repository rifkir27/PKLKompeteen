<?php

namespace App\Http\Controllers\Member;

use App\Models\Course;
use App\Models\MentorRating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request, Course $course)
    {
        $course->reviews()->UpdateOrcreate([
            'user_id' => $request->user()->id,
        ],[
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        // Create mentor rating if provided
        if ($request->has('mentor_rating') && $request->mentor_rating) {
            MentorRating::updateOrCreate([
                'mentor_id' => $course->mentor_id,
                'user_id' => $request->user()->id,
            ], [
                'rating' => $request->mentor_rating,
                'comment' => $request->review, // Use the same review text as comment
            ]);
        }

        return back()->with('toast_success', 'Review Created');
    }
}