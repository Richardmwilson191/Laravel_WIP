@extends("layouts.admin")

@section('content')
    <main class="h-11/12">
        <div class="m-4 p-4 bg-white shadow-lg h-full">
            <div class="w-3/5 h-3/5 bg-gray-200 m-auto shadow-lg p-4 border-t-4 border-blue-500">
                <div class="flex justify-between my-2">
                    <h2 class="text-2xl text-gray-800">Create Course</h2>
                </div>
                <form action="{{ route('course.store') }}" method="POST">
                    @csrf
                    <div class="input-container">
                        <div class="my-4">
                            <label for="name" required>Name</label>
                            <input class="shadow-md w-full py-1" type="text" name="name" id="" value="{{ old('name') }}">
                            <div class="text-red-500">@error('name') {{ $message }} @enderror</div>
                        </div>
                        <div>
                            <label for="type_id" required>Course Type</label>
                            <select class="py-1 w-full" name="type_id" id="">
                                @foreach ($course_types as $type)
                                    <option {{ old('type_id') === 'active' ? 'selected' : '' }}
                                        value="{{ $type->id }}">
                                        {{ $type->course_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button class="bg-blue-600 py-1 px-4 my-4 text-white" type="submit">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
