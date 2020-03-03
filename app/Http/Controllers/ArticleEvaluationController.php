<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ArticleEvaluation;
use App\Article;
use App\Reviewer;
use Illuminate\Http\Request;

class ArticleEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $articleevaluation = ArticleEvaluation::where('article_id', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_name', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_abstract', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_introduction', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_methodology', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_result', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_conclusion', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_reference', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_total_score', 'LIKE', "%$keyword%")
                ->orWhere('assessment', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_summary', 'LIKE', "%$keyword%")
                ->orWhere('comment_name', 'LIKE', "%$keyword%")
                ->orWhere('comment_abstract', 'LIKE', "%$keyword%")
                ->orWhere('comment_introduction', 'LIKE', "%$keyword%")
                ->orWhere('comment_methodology', 'LIKE', "%$keyword%")
                ->orWhere('comment_result', 'LIKE', "%$keyword%")
                ->orWhere('comment_conclusion', 'LIKE', "%$keyword%")
                ->orWhere('comment_reference', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $articleevaluation = ArticleEvaluation::latest()->paginate($perPage);
        }

        return view('article-evaluation.index', compact('articleevaluation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $article_id = $request->input('article_id');
        $reviewer_id = $request->input('reviewer_id');
        $article = Article::findOrFail($article_id);
        $reviewer = Reviewer::findOrFail($reviewer_id);
        return view('article-evaluation.create', compact('article','reviewer') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        ArticleEvaluation::create($requestData);

        return view('article-evaluation.thankyou_articleevaluation')->with('flash_message', 'ArticleEvaluation added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $articleevaluation = ArticleEvaluation::findOrFail($id);

        return view('article-evaluation.show', compact('articleevaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $articleevaluation = ArticleEvaluation::findOrFail($id);

        return view('article-evaluation.edit', compact('articleevaluation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $articleevaluation = ArticleEvaluation::findOrFail($id);
        $articleevaluation->update($requestData);

        return redirect('article-evaluation')->with('flash_message', 'ArticleEvaluation updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        ArticleEvaluation::destroy($id);

        return redirect('article-evaluation')->with('flash_message', 'ArticleEvaluation deleted!');
    }
}
