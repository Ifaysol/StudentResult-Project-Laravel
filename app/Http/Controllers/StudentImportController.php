<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentImportController extends Controller
{
    public function show()
    {
        //dd('ok');
        return view('student.import');
    }

    public function store(Request $request)
    {

      //  dd($request->all());
        $file = $request->file('file')->store('import');

       (new StudentImport)->import($file);

        return back()->withStatus("File has been uplodaed");
    }
}
