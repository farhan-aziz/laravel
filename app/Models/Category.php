<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $fillable = [
        'title',
        'description',
        'pre_course'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

}
