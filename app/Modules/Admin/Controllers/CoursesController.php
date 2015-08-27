<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Modules\Admin\Requests\CourseRequest;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller {

    public function __construct()
    {
        $this->middleware('adminAuth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $courses = Course::latest()->get();
        return view('Admin::courses.index',compact('courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('Admin::courses.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param $request
     * @return Response
     */
	public function store(CourseRequest $request)
	{
        $courses = new Course($request->all());
        $courses->save();
        flash()->success('Course Created Successfully!');
        return redirect('admin/courses');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $course = Course::findorfail($id);
        return view('Admin::courses.show', compact('course'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$course = Course::findorfail($id);
        return view('Admin::courses.edit', compact('course'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param CourseRequest $request
     * @return Response
     */
	public function update($id,CourseRequest $request)
	{
		$course = Course::findorfail($id);
        $course->update($request->all());
        flash()->success('Course Updated Successfully!');
        return redirect('admin/courses');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $course = Course::findorfail($id);
        $course->delete($id);
        flash()->success('Course Removed Successfully!');
        return redirect('admin/courses');
	}

}
