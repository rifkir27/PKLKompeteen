<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Series;
use App\Models\Course;
use Yajra\DataTables\Facades\DataTables;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course, Series $series)
    {
        return view('admin.quizzes.index', compact('course', 'series'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course, Series $series)
    {
        return view('admin.quizzes.create', compact('course', 'series'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Course $course, Series $series)
    {
        $request->validate([
            'question' => 'required|string',
            'options' => 'required|array|min:2',
            'correct_answer' => 'required|string',
        ]);

        $series->quizzes()->create($request->all());

        return redirect()->route('admin.courses.series.quizzes.index', [$course->id, $series->id])
            ->with('toast_success', 'Quiz Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course, Series $series, Quiz $quiz)
    {
        return view('admin.quizzes.show', compact('course', 'series', 'quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course, Series $series, Quiz $quiz)
    {
        return view('admin.quizzes.edit', compact('course', 'series', 'quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course, Series $series, Quiz $quiz)
    {
        $request->validate([
            'question' => 'required|string',
            'options' => 'required|array|min:2',
            'correct_answer' => 'required|string',
        ]);

        $quiz->update($request->all());

        return redirect()->route('admin.courses.series.quizzes.show', [$course->id, $series->id, $quiz->id])
            ->with('toast_success', 'Quiz Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course, Series $series, Quiz $quiz)
    {
        $quiz->delete();

        return back()->with('toast_success', 'Quiz Deleted');
    }

    public function datatable(Course $course, Series $series)
    {
        $quizzes = $series->quizzes;

        return DataTables::of($quizzes)
            ->addIndexColumn()
            ->addColumn('action', function($data) use ($course, $series){
                return '<a href="'.route('admin.courses.series.quizzes.show', [$course->id, $series->id, $data->id]).'" class="btn btn-info btn-sm"><i class="fas fa-th"></i> </a>
                        <a href="'.route('admin.courses.series.quizzes.edit', [$course->id, $series->id, $data->id]).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.courses.series.quizzes.destroy',[$course->id, $series->id, $data->id]).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
