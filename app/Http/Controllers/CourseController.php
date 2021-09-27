<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TypesOfCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all()->sortBy('name');
        return view('admin.course.index', ['courses' => $courses]);
    }

    public function create()
    {
        $course_types = TypesOfCourse::all()->sortBy('name');
        return view('admin.course.create', ['course_types' => $course_types]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:courses,name|max:255',
            'type_id' => 'required|numeric',
        ]);

        Course::create([
            $validated
        ]);

        return redirect()->route('course.index')->with('message', 'Course created successfully');
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('course.index')->with('message', 'Course deleted successfully');
    }
}
