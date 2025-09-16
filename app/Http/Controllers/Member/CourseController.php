<?php

namespace App\Http\Controllers\Member;

use App\Models\Course;
use App\Models\Series;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function course($courseId)
    {
        $course = Course::with(['series'])->findOrFail($courseId);
        $seriesDetail = Series::where('course_id', $courseId)->orderBy('number_of_series', 'ASC')->first();
        if($seriesDetail) {
            return redirect()->route('member.mycourse.course.show', [$course->id, $seriesDetail->id]);
        }

        return redirect()->route('home');

    }

    public function show(Request $request, $courseId, $seriesId)
    {
        $course = Course::with(['series'])->findOrFail($courseId);

        $alreadyBought = TransactionDetail::whereHas('transaction', function($query){
                $query->where('status', 'success')
                    ->where('user_id', Auth::id());
            })
            ->where('course_id', $course->id)
            ->first();

        if (!$alreadyBought) {
            return redirect()->route('home');
        }

        $seriesChecked = $alreadyBought->series_checked ?? [];

        if ($request->series_checked && !in_array($request->series_checked, $seriesChecked)) {
            $seriesChecked[] = $request->series_checked;
            $alreadyBought->update(['series_checked' => $seriesChecked]);
        }

        $seriesDetail = Series::where(['course_id' => $course->id, 'id' => $seriesId])->first();

        if (!$seriesDetail) {
            return abort('404');
        }

        // Check if all previous series are completed
        $allSeries = Series::where('course_id', $course->id)->orderBy('number_of_series')->get();
        $currentSeriesNumber = $seriesDetail->number_of_series;
        $previousSeries = $allSeries->where('number_of_series', '<', $currentSeriesNumber);

        foreach ($previousSeries as $prev) {
            if (!in_array($prev->id, $seriesChecked)) {
                // Redirect to the first incomplete series
                $firstIncomplete = $allSeries->first(function ($series) use ($seriesChecked) {
                    return !in_array($series->id, $seriesChecked);
                });
                return redirect()->route('member.mycourse.course.show', [$course->id, $firstIncomplete->id])
                    ->with('error', 'Anda harus menyelesaikan tugas sebelumnya terlebih dahulu.');
            }
        }

        $prevSeries = Series::where(['course_id' => $course->id, 'number_of_series' => $seriesDetail->number_of_series - 1])->first();
        $nextSeries = Series::where(['course_id' => $course->id, 'number_of_series' => $seriesDetail->number_of_series + 1])->first();

        return view('member.course.show_course', compact('course', 'seriesDetail', 'nextSeries', 'prevSeries', 'seriesChecked'));
    }
}
