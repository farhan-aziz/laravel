<?php namespace App\Modules\Admin\Requests;

use App\Http\Requests\Request;

class CourseRequest extends Request {

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
			'title'=>'required',
			'description'=>'required',
			'qualification_type'=>'required',
			'hours'=>'required',
			'credit_value'=>'required',
			'validity'=>'required',
			'unit_combinations'=>'required',
			'suitable_for'=>'required',
			'assessments'=>'required',
			'market_price'=>'required|numeric',
			'eln_price'=>'required|numeric',

		];
	}

}
