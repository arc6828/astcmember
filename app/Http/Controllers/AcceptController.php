<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Accept;
use Illuminate\Http\Request;

class AcceptController extends Controller
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
            $accept = Accept::where('email', 'LIKE', "%$keyword%")
                ->orWhere('article_id', 'LIKE', "%$keyword%")
                ->orWhere('reviwer_id', 'LIKE', "%$keyword%")
                ->orWhere('feedback', 'LIKE', "%$keyword%")
                ->orWhere('remark', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $accept = Accept::latest()->paginate($perPage);
        }

        return view('accept.index', compact('accept'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('accept.create');
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
        
        Accept::create($requestData);

        return redirect('accept')->with('flash_message', 'Accept added!');
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
        $accept = Accept::findOrFail($id);

        return view('accept.show', compact('accept'));
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
        $accept = Accept::findOrFail($id);

        return view('accept.edit', compact('accept'));
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
        
        $accept = Accept::findOrFail($id);
        $accept->update($requestData);

        return redirect('accept')->with('flash_message', 'Accept updated!');
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
        Accept::destroy($id);

        return redirect('accept')->with('flash_message', 'Accept deleted!');
    }
}
