@extends('layouts.layout')

<div>
@if ($errors->any())
    <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-8">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

@section('content')

<div class="flex flex-wrap -mx-3 mb-6 ml-5 mt-5">
<form id="form"  class="w-full max-w-lg" action="{{ route('students.store') }}" method="POST">
    @csrf 

      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
          StudentName
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror"
           name="name" id="name" value="{{ old('name') }}"  type="text" placeholder="StudentName" required >
      </div>

        
        <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="companyname">
             CompanyName
            </label>
            <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="company_id" id="company_id">
                @foreach ($companies as $company)  
                <option value="{{ $company->id }}"
                    @if (old('company_id') == $company->id)
                    selected                 
                    @endif
                    >{{ $company->name}}
                </option>    
                @endforeach     
            </select>
          </div>

          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="review">
              Review
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('review') border-red-500 @enderror"
               name="review" id="review" value="{{ old('review') }}"  type="text" placeholder="StudentReview" required >
          </div>

          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rating">
              Rating
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('rating') border-red-500 @enderror"
               name="rating" id="rating" value="{{ old('rating') }}"  type="number" placeholder="0...10" required >
          </div>

          <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="technic">
             Used Technics
            </label>
            <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="technic_id" id="technic_id">
                @foreach ($technics as $technic)  
                <option value="{{ $technic->id }}"
                    @if (old('technic_id') == $technic->id)
                    selected                 
                    @endif
                    >{{ $technic->name}}
                </option>    
                @endforeach     
            </select>
          </div>

    <div class="ml-5 mt-5 flex justify-start">
      <button id="submit" class="mt-10  bg-green-500 hover:bg-green-700 text-white font-bold  py-2 px-4 rounded" >
        Submit
       </button> </div>
     <div class="mt-5">
       <button> <a class="bg-yellow-300 hover:bg-yellow-400 text-gray-800 font-bold  ml-5 px-5  py-1   rounded-l" href="{{ route('students.index') }}">
        Prev
    </a></button>
    </div>
 


  </form>


@endsection