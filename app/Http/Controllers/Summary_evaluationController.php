<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

use App\Summary_evaluation;
use App\Mail\SummaryMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class Summary_evaluationController extends Controller
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
            $summary_evaluation = Summary_evaluation::where('article_id', 'LIKE', "%$keyword%")
                ->orWhere('article_evaluation_id', 'LIKE', "%$keyword%")
                ->orWhere('summary_average_score', 'LIKE', "%$keyword%")
                ->orWhere('summary_total_score', 'LIKE', "%$keyword%")
                ->orWhere('nwecomment_name', 'LIKE', "%$keyword%")
                ->orWhere('nwecomment_abstract', 'LIKE', "%$keyword%")
                ->orWhere('nwecomment_introduction', 'LIKE', "%$keyword%")
                ->orWhere('nwecomment_methodology', 'LIKE', "%$keyword%")
                ->orWhere('nwecomment_result', 'LIKE', "%$keyword%")
                ->orWhere('nwecomment_conclusion', 'LIKE', "%$keyword%")
                ->orWhere('nwecomment_reference', 'LIKE', "%$keyword%")
                ->orWhere('evaluation_summary', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $summary_evaluation = Summary_evaluation::latest()->paginate($perPage);
        }

        return view('summary_evaluation.index', compact('summary_evaluation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $article_id = $request->input('article_id');
        $article = Article::findOrFail($article_id);
        return view('summary_evaluation.create', compact('article') );
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
        Summary_evaluation::create($requestData);
        //Update Article 
        $article = Article::findOrFail($requestData['article_id']);
       

        switch($requestData['evaluation_summary']){
            case "pass" : 
                $requestDataArticle['pass_at'] = date('Y-m-d H:i:s');
                $requestDataArticle['status'] = 'pass';
                $article->update($requestDataArticle); 
                break;
            case "pass_modify" : 
                $requestDataArticle['pass_modify_at'] = date('Y-m-d H:i:s');
                $requestDataArticle['status'] = 'pass_modify';
                $article->update($requestDataArticle); 
                break;    
            case "notpass" : 
                $requestDataArticle['notpass_at'] = date('Y-m-d H:i:s');
                $requestDataArticle['status'] = 'notpass';
                $article->update($requestDataArticle); 
                break;
        } 

        //Send Mail


        return redirect('article')->with('flash_message', 'Summary_evaluation added!');
        //return redirect('summary_evaluation')->with('flash_message', 'Summary_evaluation added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Request $request,$id)
    {
        $summary_evaluation = Summary_evaluation::findOrFail($id);

        return view('summary_evaluation.show', compact('summary_evaluation'));
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
        $summary_evaluation = Summary_evaluation::findOrFail($id);

        return view('summary_evaluation.edit', compact('summary_evaluation'));
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
        
        $summary_evaluation = Summary_evaluation::findOrFail($id);
        $summary_evaluation->update($requestData);

        return redirect('summary_evaluation')->with('flash_message', 'Summary_evaluation updated!');
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
        Summary_evaluation::destroy($id);

        return redirect('summary_evaluation')->with('flash_message', 'Summary_evaluation deleted!');
    }

     public function summary_evaluationmail(Request $request, $id)
    {


        $requestData = $request->all();
        
        $summary_evaluation = SummaryMail::findOrFail($id);
        $summary_evaluation->update($requestData);
        
        $email = $summary_evaluation->email;
        Mail::to($email)->send(new SummaryMail($summary_evaluation));
        return redirect('article');
    }
}
