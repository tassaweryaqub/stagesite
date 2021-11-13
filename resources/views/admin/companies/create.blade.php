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
<form id="form"  class="w-full max-w-lg" action="{{ route('companies.store') }}" method="POST">
    @csrf 

      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
          CompanyName
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror"
           name="name" id="name" value="{{ old('name') }}"  type="text" placeholder="CompanyName" required >
      </div>

      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="details">
          Company Details
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('details') border-red-500 @enderror" name="details" id="details"  type="text" placeholder="Lorem Ipsum" required  >
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">

        
      <div class="w-full ml-5 md:w-1/4 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="details">
          StageStatus
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('stagestatus') border-red-500 @enderror" name="stagestatus" id="stagestatus"  type="text" placeholder="Huidige Status" required  >
      </div>
    </div>

    <div class="ml-5 mt-5 flex justify-start">
      <button id="submit" class="mt-10  bg-green-500 hover:bg-green-700 text-white font-bold  py-2 px-4 rounded" >
        Submit
       </button> </div>
     <div class="mt-5">
       <button> <a class="bg-yellow-300 hover:bg-yellow-400 text-gray-800 font-bold  ml-5 px-5  py-1   rounded-l" href="{{ route('companies.index') }}">
        Prev
    </a></button>
    </div>
 


  </form>


@endsection