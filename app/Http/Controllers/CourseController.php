<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'title' => 'required|max:100',
            'url' => 'required',
            'count' => 'required',
        ]);

        

        $course = new Course($validated);


        $course->save();


        return response()->json($course);

    }

   
}
