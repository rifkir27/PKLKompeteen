<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category, Course, Transaction, TransactionDetail, Review, Showcase, Photo};
use Ramsey\Uuid\Uuid;

class TestingController extends Controller
{
    public function index()
    {
        $data = [];
        for($i = 1; $i <= 5; $i++) {
            $data[] = Uuid::uuid4()->toString();
        }

        return $data;
    }

    public function test()
    {
        // dd('test');
        return view('admin.certificate.certificate');
    }
    public function storehtmlcertificate(Request $request)
    {
        dd($request);
        // return view('admin.certificate.index');
    }

}
