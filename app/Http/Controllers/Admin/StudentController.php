<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Practicalteacher;
use App\Models\School;
use App\Models\Student;
use App\Models\Technic;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   //* We gebruiken de variable students en de methode ALL om alle gegevens op te halen van de Student en returnen de index
                $students = Student::all(); 

                $companies = Company::all(); 

                $technics = Technic::all(); 

                $schools = School::all(); 

                $practicalteachers = Practicalteacher::all(); 

                
                return view('admin.students.index', compact('students', 'companies', 'technics', 'schools', 'practicalteachers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // * in de create maken we gebruik van de Company model en halen alle gegevens op

        $students = Student::all(); 

        $companies = Company::all(); 

        $technics = Technic::all(); 

        $schools = School::all(); 

        $practicalteachers = Practicalteacher::all(); 

    

        return view('admin.students.create', compact('students', 'companies', 'technics', 'schools', 'practicalteachers')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //* We maken een nieuwe Student class met de Company_id erin die we storen in het formulier van students.create 

        $student = new Student(); 
        $student->name = $request->name; 
        $student->review = $request->review; 
        $student-> rating = $request->rating; 
        $student->company_id = $request->company_id;
        $student->technic_id = $request->technic_id;
        $student->school_id =$request->school_id; 
        $student->practicalteacher_id =$request->practicalteacher_id; 
      

        $student->save(); 

        return redirect()->route('students.index')->with('status', 'succesvol aangemaakt!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //* route aanroepen van Student show en alle gegevens van Externe Tabellen 

        $companies = Company::all(); 

        $technics = Technic::all(); 

        $schools = School::all(); 

        $practicalteachers = Practicalteacher::all(); 

        return view('admin.students.show', compact('student', 'companies', 'technics', 'schools', 'practicalteachers')); 


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //

        $companies = Company::all(); 

        $technics = Technic::all(); 

        $schools = School::all(); 

        $practicalteachers = Practicalteacher::all(); 

        return view('admin.students.edit', compact('student', 'companies', 'technics', 'schools', 'practicalteachers')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // ! Alle waardes van de tabel student  en foreign keys hier neerzetten 

        $student->review = $request->review;
        $student->rating = $request->rating; 
        $student->name =$request->name; 
        $student->practicalteacher_id = $request->practicalteacher_id;
        $student->company_id = $request->company_id; 
        $student->technic_id = $request->technic_id; 
        $student->school_id = $request->school_id; 

        $student->save(); 

        return redirect()->route('students.index')->with('status', 'Student Succesvol Geupdate!'); 


    }

    public function delete(Student $student)

    {

        $companies = Company::all(); 

        $technics = Technic::all(); 

        $schools = School::all(); 

        $practicalteachers = Practicalteacher::all(); 


        return view('admin.students.delete',compact('student', 'companies', 'technics', 'schools', 'practicalteachers')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        $student->delete(); 
        return redirect()->route('students.index')->with('status', 'Student Succesvol Verwijderd  !' ); 
    }
}
