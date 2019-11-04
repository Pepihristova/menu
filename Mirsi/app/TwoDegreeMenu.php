<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwoDegreeMenu extends Model
{
    protected $fillable = [
        'salad_id', 'drink_id', 'price', 'restaurant_id', 
    ];
     public function salad()
    {
    	return $this->belongsTo('App\Salad');
    }
    public function drink()
    {
    	return $this->belongsTo('App\Drink');
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
