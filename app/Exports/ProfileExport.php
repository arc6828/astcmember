<?php

namespace App\Exports;

use App\Profile;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProfileExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View 
    {
        $profiles = Profile::all();
        return view('exports.payments', compact('profiles'));
    }
}
