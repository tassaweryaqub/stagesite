<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Internship;
use App\Models\Practicalteacher;
use App\Models\Student;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                //* We gebruiken de variable internships en de methode ALL om alle gegevens op te halen van de Internship/ Practical en Student en returnen de index
                $internships = Internship::all(); 
                $practicalteachers = Practicalteacher::all(); 
                $students = Student::all(); 
                return view('admin.internships.index', compact('internships', 'practicalteachers', 'students')); 


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = Company::all(); 

        $practicalteachers = PracticalTeacher::all(); 

         $students = Student::all(); 
        return view ('admin.internships.create', compact('companies', 'practicalteachers', 'students')); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $internship = new Internship(); 
        $internship->company_id = $request->company_id;
        $internship->practicalteacher_id = $request->practicalteacher_id; 
        $internship->student_id = $request->student_id; 
        $internship->save(); 

        return redirect()->route('internships.index')->with('status', 'succesvol aangemaakt!' ); 
 


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
