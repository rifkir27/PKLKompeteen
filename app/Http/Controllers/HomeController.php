<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke()
    {
        $courses = Course::where('is_published', 1)->withCount(['series', 'reviews', 'details as enrolled' => function($query){
            $query->whereHas('transaction', function($query){
                $query->where('status', 'success');
            });
        },])->limit(6)->orderBy('created_at', 'DESC')->get();

        $user = User::role('member')->get();

        return view('landing.home', compact('courses', 'user'));
    }
}
