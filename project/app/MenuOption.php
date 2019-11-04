<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuOption extends Model
{
    protected $fillable = [
        'menu_one_id', 'menu_two_id', 'menu_three_id', 'menu_three_id', 'menu_four_id', 'unique_id', 'number_people', 'current_menu_price', 'status'
    ];
     public function one_degree_menu()
    {
        return $this->hasMany('App\OneDegreeMenu');
    }
    public function two_degree_menu()
    {
        return $this->hasMany('App\TwDegreeMenu');
    }
    public function three_degree_menu()
    {
        return $this->hasMany('App\ThreeDegreeMenu');
    }
    public function four_degree_menu()
    {
        return $this->hasMany('App\FourDegreeMenu');
    }
}
