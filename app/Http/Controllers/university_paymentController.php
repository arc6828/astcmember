<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\university_payment;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class university_paymentController extends Controller
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
            $university_payment = university_payment::where('total', 'LIKE', "%$keyword%")
                ->orWhere('remark', 'LIKE', "%$keyword%")
                ->orWhere('receipt', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $university_payment = university_payment::latest()->paginate($perPage);
        }

        return view('university_payment.index', compact('university_payment'));
    }
    public function index_payment(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        switch(Auth::user()->profile->role){
            case "admin" : //FOR ADMIN SEE ALL
            if (!empty($keyword)) {
                $article = Article::whereHas('profile', function ($query) {
                            $query->where('role',  'author');
                        })
                        ->where(function($query) use ($keyword){
                            $query->where('prapet', 'LIKE', "%$keyword%")
                            ->orWhere('total_dept', 'LIKE', "%$keyword%")
                            ->orWhere('group', 'LIKE', "%$keyword%")
                            ->orWhere('name_th', 'LIKE', "%$keyword%")
                            ->orWhere('name_en', 'LIKE', "%$keyword%")
                            ->orWhere('purubpitshop', 'LIKE', "%$keyword%")
                            ->orWhere('email', 'LIKE', "%$keyword%")
                            ->orWhere('name_present', 'LIKE', "%$keyword%")
                            ->orWhere('name_aj', 'LIKE', "%$keyword%")
                            ->orWhere('tel_aj', 'LIKE', "%$keyword%");
                            
                        })
                        ->latest()->paginate($perPage);
                } else {
                    $article = Article::whereHas('profile', function ($query) {
                            $query->where('role',  'author');
                        })->latest()->paginate($perPage);
                }
                break;
            case "academic-admin" : //FOR ACADEMIC-ADMIN SEE ALL 
            if (!empty($keyword)) {
                $article = Article::whereHas('profile', function ($query) {
                            $query->where('role',  'author');
                        })
                        ->where(function($query) use ($keyword){
                            $query->where('prapet', 'LIKE', "%$keyword%")
                            ->orWhere('total_dept', 'LIKE', "%$keyword%")
                            ->orWhere('group', 'LIKE', "%$keyword%")
                            ->orWhere('name_th', 'LIKE', "%$keyword%")
                            ->orWhere('name_en', 'LIKE', "%$keyword%")
                            ->orWhere('purubpitshop', 'LIKE', "%$keyword%")
                            ->orWhere('email', 'LIKE', "%$keyword%")
                            ->orWhere('name_present', 'LIKE', "%$keyword%")
                            ->orWhere('name_aj', 'LIKE', "%$keyword%")
                            ->orWhere('tel_aj', 'LIKE', "%$keyword%");
                            
                        })
                        ->latest()->paginate($perPage);
                } else {
                    $article = Article::whereHas('profile', function ($query) {
                            $query->where('role',  'author');
                        })->latest()->paginate($perPage);
                }               
                break;
            default : //FOR NON ADMIN SEE ONLY SELF
                if (!empty($keyword)) {
                    $article = Article::where('user_id' , Auth::user()->id)
                        ->where(function($query) use ($keyword){
                            $query->where('prapet', 'LIKE', "%$keyword%")
                            ->orWhere('total_dept', 'LIKE', "%$keyword%")
                            ->orWhere('group', 'LIKE', "%$keyword%")
                            ->orWhere('name_th', 'LIKE', "%$keyword%")
                            ->orWhere('name_en', 'LIKE', "%$keyword%")
                            ->orWhere('purubpitshop', 'LIKE', "%$keyword%")
                            ->orWhere('email', 'LIKE', "%$keyword%")
                            ->orWhere('name_present', 'LIKE', "%$keyword%")
                            ->orWhere('name_aj', 'LIKE', "%$keyword%")
                            ->orWhere('tel_aj', 'LIKE', "%$keyword%");
                            
                        })
                        ->latest()->paginate($perPage);
                } else {
                    $article = Article::where('user_id' , Auth::user()->id)->latest()->paginate($perPage);
                }
                break; 
        }

        

        return view('university_payment.index_payment', compact('article'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('university_payment.create');
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
                if ($request->hasFile('receipt')) {
            $requestData['receipt'] = $request->file('receipt')
                ->store('uploads', 'public');
        }

        university_payment::create($requestData);

        return redirect('university_payment')->with('flash_message', 'university_payment added!');
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
        $university_payment = university_payment::findOrFail($id);

        return view('university_payment.show', compact('university_payment'));
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
        $university_payment = university_payment::findOrFail($id);

        return view('university_payment.edit', compact('university_payment'));
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
                if ($request->hasFile('receipt')) {
            $requestData['receipt'] = $request->file('receipt')
                ->store('uploads', 'public');
        }

        $university_payment = university_payment::findOrFail($id);
        $university_payment->update($requestData);

        return redirect('university_payment')->with('flash_message', 'university_payment updated!');
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
        university_payment::destroy($id);

        return redirect('university_payment')->with('flash_message', 'university_payment deleted!');
    }
}
