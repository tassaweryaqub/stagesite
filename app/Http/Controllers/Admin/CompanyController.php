<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //* We gebruiken de variable companies en de methode ALL om alle gegevens op te halen van de Company en returnen de index
        $companies = Company::all(); 
        return view('admin.companies.index', compact('companies')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //*  view returnen naar create.store 

        return view('admin.companies.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {
        //* Hierbij heb je eigenlijk geen PROTECTED Fillable nodig , maar kan geen kwaad om het toch te laten staan. 

        $company = new Company(); 
        $company->name = $request->name;
        $company->stagestatus = $request->stagestatus; 
        $company->details = $request->details; 
        $company->save(); 

        return redirect()->route('companies.index')->with('status', 'succesvol aangemaakt!' ); 
 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //! je gebruikt de variable company van de show methode
        return view('admin.companies.show', compact('company')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //* return de view van de edit door gebruik te maken van de variable company

        return view('admin.companies.edit', compact('company')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpdateRequest $request, Company $company)
    {
        //! LET OP bij de update gebruiken we geen NEW COMPANY () omdat we bestaande aanpassen

        $company->name = $request->name;
        $company->stagestatus = $request->stagestatus; 
        $company->details = $request->details; 
        $company->save(); 
    
            return redirect()->route('companies.index')->with('status', 'Company Succesvol Geupdate!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
