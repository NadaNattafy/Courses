<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\UpdateRequest;
use App\Http\Requests\Courses\StoreRequest;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\Category;
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
        //
        $courses = Course::get();
        return view('admin.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $trainers=Trainer::all();
        $categorys=Category::all();
        return view('admin.courses.create',compact('trainers','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        $course = Course::create($request->validated());

        if ($request->has('img')) {

            $course->update(['img' => $request->file('img')->store('coursePics')]);
           }

        return redirect()->route('admin.courses.index')->with('message','Course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        return view('admin.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        return view('admin.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Course $course)
    {
        //
        $course -> update($request->validated());


       // $request->image->storeAs('images', $request->file('img'));
        // if ($request->has('img')) {
        //     $course->update(['img' => $request->file('img')->store('coursePics')]);
        //      }

        return redirect()->route('admin.courses.index')->with('message','Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();

        return redirect()->route('admin.courses.index')
                        ->with('message','Course deleted successfully');
    }
}
