<?php

namespace App\Exports;

use App\Article;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ArticleExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View 
    {
        $articles = Article::all();
        return view('exports.articles', compact('articles'));
    }
}
