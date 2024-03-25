<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke(Request $request)
    {
        /*
            tampung seluruh data review kedalam variabel $reviews, disini
            kita juga menambahkan method search dan multiSearch
            yang kita dapatkan dari sebuah trait hasScope, selanjutnya
            kita pecah data review yang kita tampilkan hanya 8 per halaman
            dengan urutan terbaru.
        */
        $articles = Article::all();

        // passing variabel $article kedalam view.
        return view('landing.article.index', compact('articles'));
    }
}

