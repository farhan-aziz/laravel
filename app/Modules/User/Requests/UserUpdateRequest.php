<?php namespace App\Modules\User\Requests;

use App\Http\Requests\Request;

class UserUpdateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'first_name' => 'required|max:255',
            'sur_name' => 'required|max:255',
            'dob' => 'required|max:5',
            'contact_number' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'county' => 'required|max:255',
            'postal_code' => 'required|max:255',
            'country' => 'required|max:255',
		];
	}

}
