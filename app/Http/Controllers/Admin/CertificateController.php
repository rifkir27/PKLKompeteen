<?php

namespace App\Http\Controllers\Admin;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        // dd($request);
        return view('admin.certificate.index');
    }

    public function custom(Request $request)
    {
        $request->validate([
            'templatename' => 'required'
        ]);

        $certificate = Certificate::create([
            'name' => $request->templatename,
        ]);

        $certificate->first();
        // dd($certificate);
        // return $request;
        // dd($request);
        return view('admin.certificate.certificate', compact('certificate'));
    }

    public function storehtmlcertificate(Request $request, $id)
    {
        $certificate = Certificate::findorFail($id);

        $certificate->update([
            'template_html' => $request->input('template_html'),
            'template_css' => $request->input('template_css')
        ]);

        return redirect()->route('admin.certificate.index');
    }

}
