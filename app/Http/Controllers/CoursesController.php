<?php

namespace App\Http\Controllers;

use App\Models\TypesOfCourse;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function show_course(){

      $courses = TypesOfCourse::all();
      return view('admin.category.index',['courses'=>$courses]);

    }
    public function add_courses(Request $req){
      $val = $req->validate([
        'coursename'=>'unique:types_of_courses,course_type',
        'desc'=>'max:120',
      ],
    [
      'unique'=>'This Category already exists',
      'max'=>'Only 120 characters',
    ]);

      if($val){
        TypesOfCourse::create([
        'course_type'=>$req->coursename,
        'desc'=>$req->desc,
        ]);

        return redirect()->back();
      }
      else{
        return redirect()->back()->withErrors($val);
      }
    }

    public function delete($id){
    $coursedelete =TypesOfCourse::find($id);
    $coursedelete->delete();
    return redirect()->back();
    }
}
