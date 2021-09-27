<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TypesOfCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        // $courses = Course::all()->sortBy('name');
        $courses = DB::table('courses')
            ->join('types_of_courses as toc', 'courses.course_type_id', '=', 'toc.id')
            ->orderBy('courses.course_name', 'asc')
            ->get();
        return view('admin.course.index', ['courses' => $courses]);
    }

    public function create()
    {
        $course_types = TypesOfCourse::all()->sortBy('name');
        return view('admin.course.create', ['course_types' => $course_types]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:courses,course_name|max:255',
            'type_id' => 'required|numeric',
        ]);

        Course::create([
            'course_name' => $request->name,
            'course_type_id' => $request->type_id,
        ]);

        return redirect()->route('course.index')->with('message', 'Course created successfully');
    }

    public function edit($id)
    {
        $course_types = TypesOfCourse::all()->sortBy('name');
        $courses = DB::table('courses')
            ->join('types_of_courses as toc', 'courses.id', '=', 'toc.id')
            ->where('courses.id', $id)
            ->get();

        return view('admin.course.edit', ['courses' => $courses, 'course_types' => $course_types]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|unique:courses,course_name,' . $id . ',id',
            'type_id' => 'required|numeric',
        ]);

        Course::find($id)->update([
            'course_name' => $request->name,
            'course_type_id' => $request->type_id,
        ]);

        return redirect()->route('course.index')->with('message', 'Course updated
         successfully');
    }



    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('course.index')->with('message', 'Course deleted successfully');
    }
}
