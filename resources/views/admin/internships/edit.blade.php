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
<form id="form"  class="w-full max-w-lg" action="{{ route('internships.update', ['internship' => $internship->id ]) }}" method="POST">
    @method('PUT')
    @csrf 

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
                >{{ $company->name }}
            </option>    
            @endforeach     
        </select>
      </div>


      <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="practicalteachername">
         PracticalTeacherName
        </label>
        <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="practicalteacher_id" id="practicalteacher_id">
            @foreach ($practicalteachers as $practicalteacher)  
            <option value="{{ $practicalteacher->id }}"
                @if (old('student_id') == $practicalteacher->id)
                selected                 
                @endif
                >{{ $practicalteacher->name }}
            </option>    
            @endforeach     
        </select>
      </div>

      <div class="w-full md:w-auto px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="begindate">
         Begindate
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('begindate') border-red-500 @enderror"  value="{{ old('begindate') }}" name="begindate" id="begindate"  type="date" placeholder="01-01-2021" required  >
      </div>

      <div class="w-full md:w-auto px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="enddate">
         Enddate
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('enddate') border-red-500 @enderror"  value="{{ old('enddate') }}" name="enddate" id="enddate"  type="date" placeholder="?"  >
      </div>





    <div class="ml-5 mt-5 flex justify-start">
      <button id="submit" class="mt-10  bg-green-500 hover:bg-green-700 text-white font-bold  py-2 px-4 rounded" >
        Submit
       </button> </div>
     <div class="mt-5">
       <button> <a class="bg-yellow-300 hover:bg-yellow-400 text-gray-800 font-bold  ml-5 px-5  py-1   rounded-l" href="{{ route('internships.index') }}">
        Prev
    </a></button>
    </div>
 


  </form>


@endsection