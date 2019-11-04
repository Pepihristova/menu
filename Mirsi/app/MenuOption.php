<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuOption extends Model
{
      protected $fillable = [
        'menu_one_id', 'menu_two_id', 'menu_three_id', 'menu_three_id', 'menu_four_id', 'unique_id', 'number_people', 'current_menu_price', 'status'
    ];
}