<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\trainers\usercoursestore;
use App\Http\Requests\trainers\usercourseupdate;
use App\Http\Requests\usercourses\usercoursestore as UsercoursesUsercoursestore;
use App\Models\Course;
use App\Models\User;
use App\Models\UserCourses;
use Illuminate\Http\Request;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usercourses = UserCourses::get();
        return view('admin.usercourses.index',compact('usercourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users=User::all();
        $courses=Course::all();
        return view('admin.usercourses.create',compact('users','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsercoursesUsercoursestore $request)
    {
        //
        UserCourses::create($request->validated());

        return redirect()->route('admin.usercourses.index')->with('message','User Course created successfully.');
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
    public function destroy(Usercourses $usercourses)
    {
        //
        $usercourses->delete();

        return redirect()->route('admin.usercourses.index')
                        ->with('message','User Courses deleted successfully');
    }
}
