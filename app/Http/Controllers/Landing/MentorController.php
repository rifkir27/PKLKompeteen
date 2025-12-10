<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        /*
            tampung seluruh data review kedalam variabel $reviews, disini
            kita juga menambahkan method search dan multiSearch
            yang kita dapatkan dari sebuah trait hasScope, selanjutnya
            kita pecah data review yang kita tampilkan hanya 8 per halaman
            dengan urutan terbaru.
        */
        $mentors = Mentor::with(['courses.reviews', 'mentorRatings'])
            ->withCount(['courses as total_courses', 'mentorRatings as total_ratings'])
            ->orderBy('created_at', 'DESC')
            ->get()
            ->map(function ($mentor) {
                $mentor->total_reviews = $mentor->courses->sum(function ($course) {
                    return $course->reviews->count();
                });
                return $mentor;
            });

        // passing variabel $mentor kedalam view.
        return view('landing.mentor.index', compact('mentors'));
    }
}
