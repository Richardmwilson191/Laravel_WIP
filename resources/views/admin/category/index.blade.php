@extends('layouts.admin')

@section('page_title','COURSES') 

@section('content')

<div class="container flex justify-center mt-20 table-fixed">
  <div class="flex flex-col">
      <div class="w-full">
          <div class="border-b border-200 shadow">
              <table class="">
                  <thead class="bg-gray-50">
                      <tr>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              ID
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              Name
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              DESCRIPTION
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                    
                        </th>
                      </tr>
                  </thead>
                  <tbody class="bg-white">
                    @foreach ($courses as $course)
                      <tr class="whitespace-nowrap">
                          <td class="px-6 py-4 text-sm text-gray-500">
                            {{ $course->id }}
                          </td>
                          <td class="px-6 py-4">
                              <div class="text-sm text-gray-900">
                                {{ $course->course_type }}
                              </div>
                          </td>
                          <td class="px-6 py-4">
                              <div class="text-sm text-gray-500 ">{{ $course->desc }}</div>
                          </td>
                          <td class="px-6 py-4 text-sm text-gray-500">
                            <form action="{{ route('delete.course',$course->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="px-4 py-1 text-sm text-white bg-red-400 rounded hover:bg-red-700" value="DELETE"> 
                            </form>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>



<div class="min-h-screen flex items-center justify-center bg-gray-50 py px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-">
    <div>
      <h2 class="font-bold">
        ADD A COURSE CATEGORY
      </h2>
    </div>
    <form class="mt-8 space-y-6" action="{{ route('add.course') }}" method="POST">
      @csrf
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="" class="sr-only">Course Name</label>
          <input id="" name="coursename" type="" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Course Name">
        </div>
        <div>
          <label for="" class="sr-only">Course Description</label>
          <input id="" name="desc" type="" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Description">
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Submit
        </button>
      </div>
    </form>
  </div>
</div>



@endsection




{{-- 
<div>
  <table class="table-auto">
    <tr class="">
      <th>Course ID</th>
      <th>Course Name</th>
      <th>Description</th>
    </tr>
    
    @foreach ($courses as $course)
    <tr class="table-row">
      
      <td> {{ $course->id }} </td>
      <td>{{ $course->course_type }}</td>
      <td>{{ $course->desc }}</td>
      <td>
        <form action="{{ route('delete.course',$course->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="DELETE"> 
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</div> --}}