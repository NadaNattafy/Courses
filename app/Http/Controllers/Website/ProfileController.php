<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Interest\StoreRequest;
use App\Models\Course;
use App\Models\Interest;
use App\Models\Lesson;
use App\Models\Remark;
use App\Models\Trainer;
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
        $trainers = Trainer::get();
        $lessons = Lesson::get();
        $remarks = Remark::get();
        $users = User::get();
        $interests = Interest::get();
        $courses = Course::orderBy('id','DESC')->paginate(6);
        $courses = Course::WithAvg('review','rate')->orderBy('id','DESC')->paginate();
        //$courses = Course::find(11);

        // foreach($courses->review as $re)
        // {
        //  return  $re->rate;
        // }
       return view('website.profile',compact('courses','trainers','interests','users','remarks','lessons'));
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
