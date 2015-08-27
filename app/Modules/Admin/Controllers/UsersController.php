<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller {

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
        $users = User::where('is_admin', '<', 1)->orderBy('id', 'DESC')->get();
        return view('Admin::users.index',compact('users'));
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function show($id)
    {
        $user = User::findorfail($id);
        return view('Admin::users.show', compact('user'));
    }

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = User::findorfail($id);
        $user->delete($id);
        flash()->success('User Removed Successfully!');
        return redirect('admin/users');
	}

}
