<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwoDegreeMenu extends Model
{
    protected $fillable = [
        'salad_id', 'drink_id', 'price', 'restaurant_id', 
    ];
     public function salad_two()
    {
    	return $this->hasMany('App\Salad');
    }
    public function drink_two()
    {
    	return $this->hasMany('App\Drink');
    }
    public function restaurant_two()
    {
    	return $this->hasMany('App\Restauranat');
    }
}
