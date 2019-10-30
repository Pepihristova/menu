<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FourDegreeMenu extends Model
{
	protected $fillable = [
        'salad_id', 'drink_id', 'main_id', 'dessert_id', 'price', 'restaurant_id', 
    ];
     public function salad_four()
    {
    	return $this->hasMany('App\Salad');
    }
    public function main_four()
    {
    	return $this->hasMany('App\Main');
    }
    public function drink_four()
    {
    	return $this->hasMany('App\Drink');
    }
    public function dessert_four()
    {
    	return $this->hasMany('App\Dessert');
    }
    public function restaurant_four()
    {
    	return $this->hasMany('App\Restauranat');
    }
}
