<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InternshipStoreRequest;
use App\Http\Requests\InternshipUpdateRequest;
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
                $companies = Company::all(); 
                $students = Student::all(); 
     
                return view('admin.internships.index', compact('internships', 'practicalteachers', 'companies', 'students')); 


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
    public function store(InternshipStoreRequest $request)
    {
        //
        $internship = new Internship(); 
        $internship->company_id = $request->company_id;
        $internship->student_id= $request->student_id;
        $internship->practicalteacher_id = $request->practicalteacher_id; 
        $internship->begindate = $request->begindate; 
        $internship->enddate = $request->enddate; 
 
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
        // * show voor de internship 
        return view('admin.internships.show', compact('internship')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //! stuurt je door naar de update methode maar let op je maakt gebruik van relaties dus COMPANIES All erin zetten en Practicalteacher 


        $companies = Company::all(); 

        $practicalteachers = PracticalTeacher::all(); 

        $students = Student::all(); 

        return view('admin.internships.edit', compact('internship', 'companies', 'practicalteachers', 'students')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(InternshipUpdateRequest $request, Internship $internship)
    {
        //* 

        $internship->begindate = $request->begindate;
        $internship->enddate = $request->enddate; 
        $internship->practicalteacher_id = $request->practicalteacher_id;
        $internship->company_id = $request->company_id; 
        $internship->student_id = $request->student_id; 
        $internship->save(); 
    
            return redirect()->route('internships.index')->with('status', 'Internship Succesvol Geupdate!'); 
    }

    public function delete(Internship $internship)
    {
        //! maak gebruik van de companies en practicalteacher die je wilt verwijderen dus ALL methode gebruiken om alle gegevens op te halen 



        $companies = Company::all(); 

        $practicalteachers = PracticalTeacher::all(); 

        $students = Student::all(); 

        return view('admin.internships.delete', compact('internship', 'companies', 'practicalteachers', 'students')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        // * je called naar de delete methode die naar de web.php toegangklijk is via de named route in het formulier met een DELETE methode en via de public function delete verwijder je de ID van de rij
        //TODO na het verwijderen return je terug naar de index methode.


        $internship->delete();
        return redirect()->route('internships.index')->with('status', 'Internship Verwijderd !'); 

    }
}
