<?php namespace App\Modules\User\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Modules\User\Requests\UserUpdateRequest;
use App\Modules\User\Requests\PasswordUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        //dd(Auth::user());
	}

    public function profile()
    {
        $user = Auth::user();
        return view('User::profile', compact('user'));
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
     * @param UserUpdateRequest $request
     * @internal param int $id
     * @return Response
     */
	public function update(UserUpdateRequest $request)
	{
        $currentUser = Auth::user();
        $user = User::findorfail($currentUser->id);
        $request['dob'] = $request['dob'].'-'.$request['month'].'-'.$request['date'];
        $user->fill($request->except('email'));

        $user->update();
        flash()->success('Profile Update Successfully!');
        return redirect('/user/profile/');
	}

    public function changePassword()
    {
        return view('User::change_password');
    }

    public function updatePassword(PasswordUpdateRequest $request)
    {
        $currentUser = Auth::user();
        $user = User::findorfail($currentUser->id);
        $request['password'] = bcrypt($request['password']);
        $user->fill($request->except('email'));

        $user->update();

        flash()->success('Password Change Successfully!');
        return redirect('/user/profile/');
    }


}
