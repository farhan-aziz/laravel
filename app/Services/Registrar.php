<?php namespace App\Services;

use App\Models\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
            'first_name' => 'required|max:255',
            'sur_name' => 'required|max:255',
            'dob' => 'required|max:5',
            'contact_number' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'county' => 'required|max:255',
            'postal_code' => 'required|max:255',
            'country' => 'required|max:255',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'first_name' => $data['first_name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
            'sur_name' => $data['sur_name'],
//            'dob' => $data['dob'],
            'dob' => $data['dob'].'-'.$data['month'].'-'.$data['date'],
            'contact_number' => $data['contact_number'],
            'address' => $data['address'],
            'city' => $data['city'],
            'house' => $data['house'],
            'street_number' => $data['street_number'],
            'county' => $data['county'],
            'postal_code' => $data['postal_code'],
            'country' => $data['country'],

		]);
	}

}
