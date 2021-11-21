@extends('layouts.layout')

@section('content')


<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class=" w-80 bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl hover:scale-105 duration-500 transform transition cursor-pointer">
      <img src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=859&q=80" alt="">
      <div class="p-5">
        <h1 class="text-2xl font-bold">Student Show : </h1><br>
        <h1 class="text-1xl font-bold">Student  ID: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->id }}</p><br>
        <h1 class="text-1xl font-bold">Student Name : </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->name }}</p><br>
        <h1 class="text-1xl font-bold">Company Name: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->company->name}}</p><br>
        <h1 class="text-1xl font-bold">Practical Teacher Description: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->practicalteacher->description}}</p><br>
        <h1 class="text-1xl font-bold">Student Review: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->review}}</p><br>
        <h1 class="text-1xl font-bold">Student Rating: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->rating}}</p><br>
        <h1 class="text-1xl font-bold">Used Technic </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->technic->name}}</p><br>
        <h1 class="text-1xl font-bold">Schoolname : </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->school->name}}</p><br>
        <h1 class="text-1xl font-bold">Education Name : </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->school->educationname}}</p><br>
        <h1 class="text-1xl font-bold">Group: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $student->school->groupname}}</p><br>


      </div>

      <button> <a class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold  ml-5  py-3 px-4 rounded-l" href="{{ route('students.index') }}">
        Prev
    </a></button>
    </div>
  </div>


  @endsection