<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\StoreRequest;
use App\Http\Requests\Setting\UpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings = Setting::get();
        return view('admin.settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $settings=Setting::all();

        return view('admin.settings.create', compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $setting= Setting::create($request->all());

        if ($request->has('img')) {

            $setting->update(['img' => $request->file('img')->store('coursePics')]);
           }

       return redirect()->route('admin.settings.index')->with('message','Setting Created');

 }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
        return view('admin.settings.show',compact('settings'));
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
        return view('admin.settings.edit',compact('setting'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Setting $setting)
    {
        //
    $setting -> update($request->all());

    return redirect()->route('admin.settings.index')->with('message', 'Setting Updated Successfully');

}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
        $setting->delete();

         return redirect()->route('admin.setting.index')
                         ->with('message','Setting deleted successfully');
    }
}
