<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Accept;
use App\Reviewer;
use App\Mail\ReviewerMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ReviewerController extends Controller
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
            $reviewer = Reviewer::where('email', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('lastname', 'LIKE', "%$keyword%")
                ->orWhere('group', 'LIKE', "%$keyword%")
                ->orWhere('expert', 'LIKE', "%$keyword%")
                ->orWhere('school', 'LIKE', "%$keyword%")
                ->orWhere('major', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('district', 'LIKE', "%$keyword%")
                ->orWhere('amphoe', 'LIKE', "%$keyword%")
                ->orWhere('province', 'LIKE', "%$keyword%")
                ->orWhere('postnumber', 'LIKE', "%$keyword%")
                ->orWhere('tel', 'LIKE', "%$keyword%")
                ->orWhere('fax', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('remark', 'LIKE', "%$keyword%")
                ->latest('updated_at')->paginate($perPage);
        } else {
            $reviewer = Reviewer::latest('updated_at')->paginate($perPage);
        }

        return view('reviewer.index', compact('reviewer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('reviewer.create');
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
        
        Reviewer::create($requestData);

        return redirect('reviewer')->with('flash_message', 'Reviewer added!');
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
        $reviewer = Reviewer::findOrFail($id);

        return view('reviewer.show', compact('reviewer'));
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
        $reviewer = Reviewer::findOrFail($id);

        return view('reviewer.edit', compact('reviewer'));
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
        
        $reviewer = Reviewer::findOrFail($id);
        $reviewer->update($requestData);

        return redirect('reviewer')->with('flash_message', 'Reviewer updated!');
    }

    public function reviewermail(Request $request, $id)
    {


        $requestData = $request->all();
        
        $reviewer = Reviewer::findOrFail($id);
        $reviewer->update($requestData);
        
        $email = $reviewer->email;
        Mail::to($email)->send(new ReviewerMail($reviewer));
        return redirect('reviewer');
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
        Reviewer::destroy($id);

        return redirect('reviewer')->with('flash_message', 'Reviewer deleted!');
    }

    public function thankyou(Request $request, $id)
    {

        $requestData = $request->all();
        
        $reviewer = Reviewer::findOrFail($id);
        $reviewer->update($requestData);

        return view('reviewer.thank-you');
    }

    public function reject(Request $request, $id)
    {


        $requestData = $request->all();
        
        $reviewer = Reviewer::findOrFail($id);
        $reviewer->update($requestData);

        return view('reviewer.reject');
    }
}
