<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salad extends Model
{
    protected $fillable = [
        'name'
    ];
    public function one_degree_menu_sal()
    {
    	return $this->hasMany('App\OneDegreeMenu');
    }
    public function two_degree_menu_sal()
    {
    	return $this->belongsTo('App\TwoDegreeMenu');
    }
    public function three_degree_menu_sal()
    {
    	return $this->belongsTo('App\ThreeDegreeMenu');
    }
    public function four_degree_menu_sal()
    {
    	return $this->belongsTo('App\FourDegreeMenu');
    }
}
