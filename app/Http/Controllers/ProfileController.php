<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
            $profile = Profile::whereNotIn('role',  ['guest'])
                ->where(function ($query) use ($keyword) {
                    $query->where('sex', 'LIKE', "%$keyword%")
                    ->orWhere('title', 'LIKE', "%$keyword%")
                    ->orWhere('name', 'LIKE', "%$keyword%")
                    ->orWhere('lastname', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orWhere('status', 'LIKE', "%$keyword%")
                    ->orWhere('statusothers', 'LIKE', "%$keyword%")
                    ->orWhere('food', 'LIKE', "%$keyword%")
                    //->orWhere('role', 'LIKE', "%$keyword%")
                    ->orWhere('school', 'LIKE', "%$keyword%")
                    ->orWhere('major', 'LIKE', "%$keyword%")
                    ->orWhere('address', 'LIKE', "%$keyword%")
                    ->orWhere('district', 'LIKE', "%$keyword%")
                    ->orWhere('amphoe', 'LIKE', "%$keyword%")
                    ->orWhere('province', 'LIKE', "%$keyword%")
                    ->orWhere('postnumber', 'LIKE', "%$keyword%")
                    ->orWhere('tel', 'LIKE', "%$keyword%")
                    ->orWhere('fax', 'LIKE', "%$keyword%")
                    ->orWhere('fileregister', 'LIKE', "%$keyword%")
                    ->orWhere('bill_school', 'LIKE', "%$keyword%")
                    ->orWhere('bill_major', 'LIKE', "%$keyword%")
                    ->orWhere('bill_address', 'LIKE', "%$keyword%")
                    ->orWhere('bill_district', 'LIKE', "%$keyword%")
                    ->orWhere('bill_province', 'LIKE', "%$keyword%")
                    ->orWhere('bill_postnumber', 'LIKE', "%$keyword%")
                    ->orWhere('bill_tel', 'LIKE', "%$keyword%")
                    ->orWhere('bill_fax', 'LIKE', "%$keyword%");
                })
                ->latest()->paginate($perPage);
        } else {
            $profile = Profile::whereNotIn('role',  ['guest'])->latest()->paginate($perPage);
        }

        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('profile.create');
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
                if ($request->hasFile('fileregister')) {
            $requestData['fileregister'] = $request->file('fileregister')
                ->store('uploads', 'public');
        }

        Profile::create($requestData);

        return redirect('profile')->with('flash_message', 'Profile added!');
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
        $profile = Profile::findOrFail($id);

        return view('profile.show', compact('profile'));
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
        $profile = Profile::findOrFail($id);

        return view('profile.edit', compact('profile'));
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
                if ($request->hasFile('fileregister')) {
            $requestData['fileregister'] = $request->file('fileregister')
                ->store('uploads', 'public');
        }

        $profile = Profile::findOrFail($id);
        $profile->update($requestData);

        return redirect('home')->with('flash_message', 'Profile updated!');
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
        Profile::destroy($id);

        return redirect('profile')->with('flash_message', 'Profile deleted!');
    }
}
