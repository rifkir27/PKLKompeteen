<?php

namespace App\Http\Controllers\Landing;

use App\Models\Series;
use App\Models\Course;
use App\Models\Review;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('is_published', 1)
            ->withCount(['series', 'reviews', 'details as enrolled' => function($query){
                $query->whereHas('transaction', function($query){
                    $query->where('status', 'success');
                });
            }])
            ->withAvg('reviews as avg_rating', 'rating')
            ->search('name')
            ->orderBy('created_at', 'DESC')
            ->get();
        
        return view('landing.course.index', compact('courses'));
    }

    public function show(Course $course)
    {
        $series = Series::whereBelongsTo($course)->get();

        $enrolled = Transaction::with('details.course')
            ->where('status', 'success')
            ->whereHas('details', function($query) use($course){
                $query->where('course_id', $course->id);
            })->count();

        if(Auth::user()){
            $alreadyBought = Transaction::with('details.course')
                ->where('status', 'success')
                ->where('user_id', Auth::id())
                ->whereHas('details', function($query) use($course){
                    $query->where('course_id', $course->id);
                })->first();
        }else{
            $alreadyBought = [];
        }

        $reviews = Review::where('course_id', $course->id)->orderBy('created_at', 'DESC')->limit(6)->get();
        
        $avgRating = Review::where('course_id', $course->id)->avg('rating');
        $ratingCount = Review::where('course_id', $course->id)->count();
        $ratingStats = Review::where('course_id', $course->id)
            ->selectRaw('rating, COUNT(*) as count')
            ->groupBy('rating')
            ->orderBy('rating', 'DESC')
            ->get();
        
        return view('landing.course.show', compact('course', 'series', 'enrolled', 'alreadyBought', 'reviews', 'avgRating', 'ratingCount', 'ratingStats'));
    }

    public function series(Course $course, $number_of_series)
    {
        // tampung data user yang sedang login kedalam variable $user.
        $user = Auth::user();

        // tampung data series dengan "course_id" dan "number_of_series" sesuai dengan variabel $course dan $number_of_series kedalam variabel $series.
        $series = Series::whereBelongsTo($course)->where('number_of_series', $number_of_series)->first();

        /*
            tampung data transaction yang memiliki status "success" dan "user_id" sesuai dengan user yang sedang login kedalam variabel $transaction, kemudian kita memanggil relasi menggunakan with, selanjutnya pada saat melakukan pemanggilan relasi details, kita melakukan sebuah query untuk mengambil data transaction detail dengan "course_id" sesuai dengan variabel $course->id.
        */
        if($user){
            $transaction = Transaction::with('user', 'details.course')
                ->where('user_id', $user->id)
                ->where('status', 'success')
                ->whereHas('details', function($query) use($course){
                    $query->where('course_id', $course->id);
                })->get();
        }else{
            $transaction = [];
        }

        // tampung data review dengan "course_id" sesuai dengan variabel $course->id kedalam variabel $reviews.
        $reviews = Review::where('course_id', $course->id)->get();

        // tampung jumlah rata - rata dari "rating" data review dengan "course_id" sesuai dengan variabel $course->id kedalam variabel $avgRating.
        $avgRating = Review::where('course_id', $course->id)->avg('rating');

        // cek apakah variabel $transaction memiliki nilai atau tidak.
        if(count($transaction)){
            // tampung data variabel $transaction kedalam variabel $alreadyBought.
            $alreadyBought = $transaction;
        // jika variabel $transaction tidak memiliki nilai
        }else{
            // tampung empty string kedalam variabel $alreadyBought
            $alreadyBought = '';
        }
        // dd($transaction);

        // cek apakah data variabel $series dengan "intro" sama dengan 0 dan atau apakah data variabel $alreadyBounght memiliki nilai atau tidak
        if($alreadyBought || $series->intro == 0){
            // tampung seluruh data series dengan "course_id" sesuai dengan variabel $course kedalam variabel $series, dan data yang ditampilkan diurutkan berdasarkan number_of_series.
            $series = Series::whereBelongsTo($course)->orderBy('number_of_series')->get();
        // jila data variabel $series dengan "intro" sama dengan 1, dan atau data variabel $alreadyBought tidak memiliki nilai.
        }else{
            // kembali kehalaman sebelumnya dengan membawa toastr.
            return back()->with('toast_error', 'Pembelajaran ini hanya untuk member premium');
        }

        // passing variabel $course, $series, $series, $alreadyBought, $reviews, dan $avgRating kedalam view.
        return view('landing.course.series', compact('course','series', 'series', 'alreadyBought', 'reviews', 'avgRating'));
    }
}