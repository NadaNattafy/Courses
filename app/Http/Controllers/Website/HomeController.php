<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\UserOpinion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $courses = Course::orderBy('id','DESC')->paginate(6);
        $courses = Course::WithAvg('review','rate')->orderBy('id','DESC')->paginate();
        $useropinions = UserOpinion::get();
        //$courses = Course::find(11);

        // foreach($courses->review as $re)
        // {
        //  return  $re->rate;
        // }
       return view('website.index',compact('courses','useropinions'));
    }

    public function filter(Request $request)
    {
        $courses = course::query();

        if ($request->has('category_id')) {
            $category_id = $request->category_id;
            $courses = $courses->whereHas('category', function ($q) use ($category_id) {
                $q->where('parent_id', $category_id);
            });
        }

        if ($request->has('subcategory_id')) {
            $courses = $courses->where('category_id', $request->subcategory_id);
        }

        if ($request->has('price_more_than')) {
            $courses = $courses->where('price', '>', $request->price_more_than);
        }
        if ($request->has('price_less_than')) {
            $courses = $courses->where('price', '<', $request->price_less_than);
        }
        if ($request->has('order') && $request->order == 'asc_az') {
            if (app()->getLocale() == 'ar') $courses = $courses->orderBy('ar_name');
            else $courses = $courses->orderBy('en_name');

        }
        if ($request->has('order') && $request->order == 'desc_az') {
            if (app()->getLocale() == 'ar') $courses = $courses->orderBy('ar_name', 'desc');
            else $courses = $courses->orderBy('en_name', 'desc');
        }

        if ($request->has('type') && $request->type == 'recently') {
          $courses = $courses->latest();
        }

        if ($request->has('type') && $request->type == 'offer') {
          $courses = $courses->where('price_after_discount','!=',null);
        }
        //
        $courses = $courses->paginate($this->paginateNumber);
        return $this->apiResponse(new CoursesCollection($courses));
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
