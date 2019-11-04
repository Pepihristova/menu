<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FourDegreeMenu extends Model
{
	protected $fillable = [
        'salad_id', 'drink_id', 'main_id', 'dessert_id', 'price', 'restaurant_id', 
    ];
     public function salad()
    {
    	return $this->belongsTo('App\Salad');
    }
    public function main()
    {
    	return $this->belongsTo('App\Main');
    }
    public function drink()
    {
    	return $this->belongsTo('App\Drink');
    }
    public function dessert()
    {
    	return $this->belongsTo('App\Dessert');
    }
    public function restaurant()
    {
    	return $this->belongsTo('App\Restaurant');
    }
    public function menu_option()
    {
        return $this->belongsTo('App\MenuOption');
    }
}
