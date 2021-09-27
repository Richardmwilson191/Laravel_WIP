@extends("layouts.admin")


@section('content')

    <main class="h-11/12">
        <div class="m-4 p-4 bg-white shadow-lg h-full">
            <div class="flex justify-between my-2">
                <h1 class="text-2xl text-gray-800">List of Courses</h1>
                <a class="px-4 py-1 bg-green-600 text-white hover:bg-green-400 shadow-md"
                    href="{{ route('course.create') }}">Create
                    Course</a>
            </div>

            <table class="min-w-full table-auto">
                <thead class="text-left bg-blue-700">
                    <tr class="bg-blue-700 shadow-md">
                        <th class="text-white py-2 pl-2">Name</th>
                        <th class="text-white">Course Type</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200">
                    @foreach ($courses as $course)
                        <tr class="bg-white border-4 border-gray-200">
                            <td class="pl-2">{{ $course->course_name }}</td>
                            <td class="pl-2">{{ $course->course_type }}</td>
                            <td>
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
                                @auth

                                    @if (Auth::user()->is_admin)
                                        <a class="text-blue-600 px-1" href="{{ route('course.edit', $course->id) }}">Edit</a>

                                        <form class="inline" action="{{ route('course.destroy', $course->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Are you sure you want to delete {{ $course->course_name }} course?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="px-1 bg-transparent text-red-600 ">
                                                Delete
                                            </button>
                                        </form>
                                    @endif
                                @endauth
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
