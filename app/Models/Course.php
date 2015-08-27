<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $fillable =[
        'category_id',
        'title',
        'description',
        'qualification_type',
        'hours',
        'credit_value',
        'validity',
        'unit_combinations',
        'suitable_for',
        'market_price',
        'eln_price',
        'assessments'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
