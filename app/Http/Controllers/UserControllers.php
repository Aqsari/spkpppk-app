<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;

class UserControllers extends Controller
{
    public function import_excel()
    {
        return view('import_excel');
    }

    public function import_excel_post(Request $request)
    {
       #dd($request);
       Excel::import(new UserImport, 'AHP2.XLS'); #AHP2.XLS
    }
}
