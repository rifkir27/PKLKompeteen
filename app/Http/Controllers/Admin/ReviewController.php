<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\MentorRating;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use DataTables;

class ReviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reviews = Review::search('rating')
            ->multiSearch('course', 'name')
            ->multiSearch('user', 'name')
            ->paginate(8)
            ->withQueryString();

        return view('admin.review.index', compact('reviews'));
    }

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

    public function datatable()
    {
        $reviews = Review::with(['course', 'user']);

        return DataTables::of($reviews)
            ->addIndexColumn()
            ->make(true);
    }



}
