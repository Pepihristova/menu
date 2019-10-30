<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreeDegreeMenu extends Model
{
    protected $fillable = [
        'salad_id', 'drink_id', 'main_id', 'price', 'restaurant_id', 
    ];
     public function salad_three()
    {
    	return $this->hasMany('App\Salad');
    }
    public function main_three()
    {
    	return $this->hasMany('App\Main');
    }
    public function drink_three()
    {
    	return $this->hasMany('App\Drink');
    }
    public function restaurant_three()
    {
    	return $this->hasMany('App\Restauranat');
    }
}
