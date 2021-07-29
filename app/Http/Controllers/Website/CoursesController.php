<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Review\StoreRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Http\Request;

class CoursesController extends Controller
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
        $courses = Course::get();
        return view('website.courses.course',compact('courses','lessons'));
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
    public function show(Course $course)
    {
        //
        $course = Course::get();
        $lessons=Lesson::where('course_id',$course->id)->get();
        dd($lessons);
        return view('website.courses.course' ,compact('lessons'));
    }

    public function courseStar (StoreRequest $request, Course $course) {
        $review = new Review;
        $review->user_id = Auth::id();
        $review->review = $request->input('star');
        $course->reviews()->save($review);
        return redirect()->back();
  }


  public function render()
  {
      $comments = Review::where('course_id', $this->course->id)->where('status', 1)->with('user')->get();
      return view('website.courses.course', compact('comments'));
  }

  public function mount()
  {
      if(auth()->user()){
          $review = Review::where('user_id', auth()->user()->id)->where('course_id', $this->course->id)->first();
          if (!empty($review)) {
              $this->rating  = $review->rating;
              //$this->comment = $review->comment;
              $this->currentId = $review->id;
          }
      }
      return view('website.courses.course');
  }

  public function delete($id)
  {
      $review = Review::where('id', $id)->first();
      if ($review && ($review->user_id == auth()->user()->id)) {
          $review->delete();
      }
      if ($this->currentId) {
          $this->currentId = '';
          $this->rating  = '';
          //$this->comment = '';
      }
  }

  public function rate()
  {
      $review = Review::where('user_id', auth()->user()->id)->where('course_id', $this->course->id)->first();
      $this->validate();
      if (!empty($review)) {
          $review->user_id = auth()->user()->id;
          $review->course_id = $this->course->id;
          $review->rating = $this->rating;
         // $review->comment = $this->comment;
          $review->status = 1;
          try {
              $review->update();
          } catch (\Throwable $th) {
              throw $th;
          }
          session()->flash('message', 'Success!');
      } else {
          $review = new Review;
          $review->user_id = auth()->user()->id;
          $review->course_id = $this->course->id;
          $review->rating = $this->rating;
          //$review->comment = $this->comment;
          $review->status = 1;
          try {
              $review->save();
          } catch (\Throwable $th) {
              throw $th;
          }
          $this->hideForm = true;
      }
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
