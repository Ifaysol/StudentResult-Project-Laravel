<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use CreateMarksTable;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {   
        $data['total_mark'] = Mark::groupBy('student_id')
            ->selectRaw('sum(marks) as sum, student_id')
            ->orderBy('sum', 'desc')
            ->get();
        
        return view('mark.show', $data);
        //return view('mark.show');
    }
    
}
