<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
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
<<<<<<< HEAD

                $technics = Technic::all(); 
                return view('admin.students.index', compact('students', 'companies', 'technics')); 
=======
                return view('admin.students.index', compact('students', 'companies')); 
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2
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
<<<<<<< HEAD

        $technics = Technic::all(); 

        return view('admin.students.create', compact('students', 'companies', 'technics')); 
=======
        return view('admin.students.create', compact('students', 'companies')); 
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2
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
<<<<<<< HEAD
        $student->review = $request->review; 
        $student-> rating = $request->rating; 
        $student->company_id = $request->company_id;
        $student->technic_id = $request->technic_id;
      

        $student->save(); 

        return redirect()->route('students.index')->with('status', 'succesvol aangemaakt!'); 
=======
        $student->company_id = $request->company_id;
        $student->save(); 

        return redirect()->route('students.index')->with('status', 'succesvol aangemaakt!' ); 
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
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
        //
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
    }
}
