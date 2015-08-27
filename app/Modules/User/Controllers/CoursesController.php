<?php namespace App\Modules\User\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $slug=null)
	{
		$category = Category::with('courses')->find($id);
        return view('User::courses.show', compact('category'));
	}

	/**
     *
     * Displays the checkout page
     */
    public function getCheckout($id, $slug=null)
    {
        $course = Course::find($id);
        return view('User::courses.checkout', ['course'=>$course]);

    }

    /**
     *
     * Process payments for the courses
     */
    public function postCheckout(){



    }


}
