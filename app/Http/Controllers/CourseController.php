<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{

    public function index() {
        $courses = Course::all();
        return view('pages.course.index', compact('courses'));
    }

    public function create() {
        $enrollments = Enrollment::all();
        return view('pages.course.create', compact('enrollments'));
    }

    public function store(Request $request) {

        //validation
        Validator::make($request->all(), [
            'name' => ['required', 'string','max:50'],
            'description' => ['required', 'string', 'max:1000'],
            'image' => ['required']
        ])->validate();

        //ernregistrement
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->image = $request->image;
        $course->save();

        return redirect()->route('courses.index')->with('succes', 'course ajouté avec success');

    }


    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
