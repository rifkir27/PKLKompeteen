<?php

namespace App\Http\Controllers\Admin;

use App\Models\Showcase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowcaseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $showcases = Showcase::with('user', 'course')->orderBy('created_at', 'DESC')->paginate(9);
        return view('admin.showcase.index', compact('showcases'));
    }
}