<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Interest\StoreRequest;
use App\Http\Requests\Lesson\UpdateRequest;
use App\Models\Course;
use App\Models\Interest;
use App\Models\Lesson;
use App\Models\Remark;
use App\Models\TrainerInterest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainers = auth('trainer')->user();
        $lessons = Lesson::get();
        $remarks = Remark::get();
        $users = auth()->user();
        $interests = Interest::get();
        $trainerinterests = TrainerInterest::get();
        $courses = Course::orderBy('id', 'DESC')->paginate(6);
        $courses = Course::WithAvg('review', 'rate')->orderBy('id', 'DESC')->paginate();
        //dd($courses);
        //dd($lessons);
        return view('website.profile', compact('courses', 'trainers', 'interests', 'users', 'remarks', 'lessons', 'trainerinterests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $interests = Interest::get();

        return view('website.profile', compact('interests'));
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
        Interest::create($request->validated());

        return back()->with('message', 'Interest Add successfully.');
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
    public function edit($id)
    {
        //
        $course = Course::find($id);
        return view('website.profile', compact('course'));
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
        $course->update($request->validated());

        return redirect()->route('website.profiles.index')->with('message', 'Course Updated Successfully');
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
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('website.profiles.index')
            ->with('message', 'Course deleted successfully');

    }
}
