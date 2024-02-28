<?php

namespace App\Http\Controllers\Member;

use App\Models\Course;
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

        return back()->with('toast_success', 'Review Created');
    }
}