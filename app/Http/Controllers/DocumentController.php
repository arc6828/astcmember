<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Document;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
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
        /*
        if (!empty($keyword)) {
            $document = Document::where('title', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('article_id', 'LIKE', "%$keyword%")
                ->orWhere('filename', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $document = Document::latest()->paginate($perPage);
        }
        */

        $document = Document::where('user_id',Auth::id())->latest()->paginate($perPage);

        return view('document.index', compact('document'));
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
        return view('document.create', compact('article') );
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
        $article = Article::findOrFail($requestData['article_id']);
        if ($request->hasFile('filename-word')) {            
            $requestData['title'] = $request->input('title-word');
            $requestData['filename'] = $request->file('filename-word')->store('uploads', 'public');
            $document = Document::create($requestData);  
            $requestDataArticle['status'] = "receive";
        }
        if ($request->hasFile('filename-pdf')) {            
            $requestData['title'] = $request->input('title-pdf');
            $requestData['filename'] = $request->file('filename-pdf')->store('uploads', 'public');
            $document = Document::create($requestData);  
            $requestDataArticle['status'] = "receive";
        }
        if(!empty($requestDataArticle['status'])){
            if(isset($article->pass_modify)){
                $requestDataArticle['status'] = "waitmodify";
            }else if(isset($article->waitmodifyformat)){
                $requestDataArticle['status'] = "consider";
            }
            //UPDATE ARITCLE TO RECIEVE
            switch($requestDataArticle['status']){
                case "receive" : 
                    $requestDataArticle['received_at'] = date('Y-m-d H:i:s');
                    break;
                case "consider" : 
                    $requestData['consider_at'] = date('Y-m-d H:i:s');
                    break;    
                case "waitmodify" : 
                    $requestData['waitmodify_at'] = date('Y-m-d H:i:s');
                    break;
            }
            $article->update($requestDataArticle);  

        }

        return redirect("article/".$document->article_id)->with('flash_message', 'Document added!');
        //return redirect('document')->with('flash_message', 'Document added!');
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
        $document = Document::findOrFail($id);

        return view('document.show', compact('document'));
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
        $document = Document::findOrFail($id);

        return view('document.edit', compact('document'));
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
                if ($request->hasFile('filename')) {
            $requestData['filename'] = $request->file('filename')
                ->store('uploads', 'public');
        }

        $document = Document::findOrFail($id);
        $document->update($requestData);

        return redirect('document')->with('flash_message', 'Document updated!');
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
        Document::destroy($id);

        return redirect('document')->with('flash_message', 'Document deleted!');
    }
}
