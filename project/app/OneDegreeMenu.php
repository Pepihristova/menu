<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneDegreeMenu extends Model
{
    protected $fillable = [
        'salad_id', 'price', 'restaurant_id', 
    ];
     public function salad_one()
    {
    	return $this->belongsTo('App\Salad');
    }
    public function restaurant_one()
    {
    	return $this->hasMany('App\Restauranat');
    }
}
