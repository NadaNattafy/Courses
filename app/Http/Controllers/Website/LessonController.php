<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\StoreRequest;
use App\Http\Requests\Lesson\UpdateRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
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
        return view('website.courses.course',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lessons = Lesson::get();

        return view('website.profile', compact('lessons'));
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
        $lesson =  Lesson::create($request->validated());

        if ($request->has('file')) {

            $lesson->update(['file' => $request->file('file')->store('LessonFile')]);
           }


        return back()->with('message', 'Lesson Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lessons)
    {
        //
        return view('website.profile',compact('lessons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Lesson $lessons)
    {
        //
        $lessons -> update($request->validated());

        return redirect()->route('website.profile.index')->with('message','Lesson Updated Successfully');
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
        $lessons = Lesson::find($id);
        $lessons->delete();
        return redirect()->route('website.courses.show')
                        ->with('message','Lesson deleted successfully');

    }
}
