<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dessert extends Model
{
    protected $fillable = [
        'name'
    ];
    public function one_degree_menu_des()
    {
    	return $this->belongsTo('App\OneDegreeMenu');
    }
    public function two_degree_menu_des()
    {
    	return $this->belongsTo('App\TwoDegreeMenu');
    }
    public function three_degree_menu_des()
    {
    	return $this->belongsTo('App\ThreeDegreeMenu');
    }
    public function four_degree_menu_des()
    {
    	return $this->belongsTo('App\FourDegreeMenu');
    }
}
