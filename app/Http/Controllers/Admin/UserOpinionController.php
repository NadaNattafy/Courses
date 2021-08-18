<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserOpinion\StoreRequest;
use App\Http\Requests\UserOpinion\UpdateRequest;
use App\Models\UserOpinion;
use Illuminate\Http\Request;

class UserOpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $useropinions = UserOpinion::get();
        return view('admin.useropinions.index',compact('useropinions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.useropinions.create');
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
        UserOpinion::create($request->validated());

        return redirect()->route('admin.useropinions.index')->with('message','User Opinion created successfully.');

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
    public function edit(UserOpinion $useropinion)
    {
        //
        return view('admin.useropinions.edit',compact('useropinion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, UserOpinion $useropinion)
    {
        //
        $useropinion -> update($request->validated());

        return redirect()->route('admin.useropinions.index')->with('message','User Opinion Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserOpinion $useropinion)
    {
        //
        $useropinion->delete();

        return redirect()->route('admin.useropinions.index')
                        ->with('message','User Opinion deleted successfully');
    }
}
