@extends('layouts.layout')

@if (session('status'))
<div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8 ">
  {{ session('status') }}
</div>
  
@endif

@section('content')

<!-- Table uit Tailwind Component -->
<div class="flex flex-col">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                InternShip_ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Company_ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                CompanyName
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Company Details
              </th>

              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Internship Begindate
              </th>

              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Internship Enddate
              </th>

              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                PracticalTeacherName
              </th>

              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Practical Description
              </th>
    
    
        
     
                <button class=" float-right mr-6 btn bg-green-500 hover:bg-green-400 text-white">
                    <a href="{{ route('internships.create')  }}">Create</a>
                  </button>
       
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ( $internships as $internship)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                          Id
                    </div>
                    <div class="text-sm text-gray-500">
                     {{ $internship->id }}
                    </div>
                  </div>
                </div>


              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Company_ID</div>
                <div class="text-sm text-gray-500">  {{ $internship->company_id }}</div>
              </td>

              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Company Name</div>
                <div class="text-sm text-gray-500">  {{ $internship->company->name }}</div>
              </td>

              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Company Details</div>
                <div class="text-sm text-gray-500">  {{ $internship->company->details }}</div>
              </td>

              
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Internship Startdate</div>
                <div class="text-sm text-gray-500">  {{ $internship->begindate }}</div>
              </td>

              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Internship Enddate</div>
                <div class="text-sm text-gray-500">  {{ $internship->enddate }}</div>
              </td>

              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">PracticalTeacherName</div>
                <div class="text-sm text-gray-500">  {{ $internship->practicalteacher->name}}</div>
              </td>

              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Practical Description</div>
                <div class="text-sm text-gray-500">  {{ $internship->practicalteacher->description}}</div>
              </td>

       
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
           
                  <a href="{{ route('internships.show', ['internship'=> $internship->id ]) }}">Show</a>
                </span>
              </td>
               <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <a href="{{ route('internships.edit', ['internship'=> $internship->id ]) }}">Edit</a>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="{{ route('internships.delete', ['internship'=> $internship->id]) }}" class="text-red-600 hover:text-red-900">Delete</a>
              </td> 
            </tr> 


            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



    @endsection