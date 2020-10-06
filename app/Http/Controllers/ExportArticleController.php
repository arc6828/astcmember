<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\ArticleExport;
// use App\Imports\ProfileImport;
use Maatwebsite\Excel\Facades\Excel;

class ExportArticleController extends Controller
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
    public function export_articel() 
    {
        return Excel::download(new ArticleExport, 'Article.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function import() 
    // {
    //     Excel::import(new ProfileImport,request()->file('file'));
           
    //     return back();
    // }
}
