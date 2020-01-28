<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\ProfileExport;
use App\Imports\ProfileImport;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView(){//SHOW BUTTON
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ProfileExport, 'Profile.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ProfileImport,request()->file('file'));
           
        return back();
    }
}
