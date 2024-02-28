<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $fileName = Carbon::now()->format('Ymdhis').$request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('/upload_editor', $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);
    }
}
