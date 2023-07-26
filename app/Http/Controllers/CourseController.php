<?php

namespace App\Http\Controllers;


use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$courses = course::all();
        $courses = Course::latest()->paginate(6); // Order courses by creation date in descending order

        // Pass the courses to the view for listing
        return view('course.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        
    }

   /**
 * Display the specified resource.
 *
 * @param  \App\Models\course  $course
 * @return \Illuminate\Http\Response
 */
public function show(Course $course)
{
    $courses = Course::latest()->paginate(6); // Order courses by creation date in descending order
    // Retrieve the next and previous courses
    $previous = Course::where('id', '<', $course->id)->orderBy('id', 'desc')->first();
    $next = Course::where('id', '>', $course->id)->orderBy('id')->first();
    $recentcourses = Course::orderBy('id', 'desc')->take(5)->get();
    // Pass the current course, previous course, and next course to the view
    return view('course.course_detail', compact('course','courses','previous', 'next','recentcourses'));
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
