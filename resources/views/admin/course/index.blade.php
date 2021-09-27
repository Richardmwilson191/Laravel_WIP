@extends("layouts.admin")


@section('content')

    <main class="h-11/12">
        <div class="m-4 p-4 bg-white shadow-lg h-full">
            <div class="flex justify-between my-2">
                <h1 class="text-2xl text-gray-800">List of Courses</h1>
                <a class="px-4 py-1 bg-green-400 shadow-md" href="{{ route('course.create') }}">Create Course</a>
            </div>

            <table class="min-w-full table-auto">
                <thead class="justify-between bg-blue-700">
                    <tr class="bg-blue-700 shadow-md">
                        <th class="text-white py-2 ">Name</th>
                        <th class="text-white">Course Type</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200">
                    @foreach ($courses as $course)
                        <tr class="bg-white border-4 border-gray-200">
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->type }}</td>
                            <td>
                                Delete
                                {{-- <a class="text-green-600 px-1" href="{{ route('courseDetails', $course) }}">Details</a>

                        @if (Auth::user()->role === 'user')

                            <form class="inline" action="{{ route('makeapplication') }}" method="post"
                                onsubmit="return confirm('Are you sure you want to apply for the {{ $course->title }} course?')">
                                @csrf
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <button class="text-blue-600 px-1">
                                    Apply
                                </button>
                            </form>
                        @endif --}}

                                {{-- Show actions for admins only --}}
                                {{-- @if (Auth::user()->role === 'admin')
                            <a class="text-blue-600 px-1" href="{{ route('course.edit', $course) }}">Edit</a>

                            <form class="inline" action="{{ route('course.destroy', $course) }}"
                                method="post"
                                onsubmit="return confirm('Are you sure you want to delete {{ $course->title }} course?');">
                                @csrf
                                @method('DELETE')
                                <button class="px-1 bg-transparent text-red-600 ">
                                    Delete
                                </button>
                            </form>
                        @endif --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
