<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\studentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["students"] = Student::all();
        return view("class.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->toArray());
        $studentClass = studentClass::create([
            "student_classes" => $request->get("student_classes"),
             "student_id" => $request->student_id,
           
        ]);
        
        if(empty($studentClass)) {
            return redirect()->back()->withInput();
        }
        return redirect()->route("studentClass.index")->with("SUCCESS", __("Class has been created successfully."));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function show(studentClass $studentClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function edit(studentClass $studentClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentClass $studentClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentClass $studentClass)
    {
        //
    }
}
