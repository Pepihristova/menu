<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneDegreeMenu extends Model
{
    protected $fillable = [
        'salad_id', 'price', 'restaurant_id', 
    ];
     public function salad()
    {
    	return $this->belongsTo('App\Salad');
    }
    public function restaurant()
    {
    	return $this->belongsTo('App\Restaurant');
    }
}
