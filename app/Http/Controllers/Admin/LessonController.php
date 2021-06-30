<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\StoreRequest;
use App\Http\Requests\Lesson\UpdateRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lessons = Lesson::get();
        return view('admin.lessons.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses=Course::all();
        return view('admin.lessons.create',compact('courses'));
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
        Lesson::create($request->validated());

        return redirect()->route('admin.lessons.index')->with('message','Lesson created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
        return view('admin.lessons.show',compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
        return view('admin.lessons.edit',compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Lesson $lesson)
    {
        //
        $lesson -> update($request->validated());

        return redirect()->route('admin.lessons.index')->with('message','Lesson Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
        $lesson->delete();

        return redirect()->route('admin.lessons.index')
                        ->with('message','Lesson deleted successfully');

    }
}
