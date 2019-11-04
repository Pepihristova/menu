<?php

namespace App\Http\Controllers;
use App\MenuOption;
use App\OneDegreeMenu;
use App\TwoDegreeMenu;
use App\ThreeDegreeMenu;
use App\FourDegreeMenu;
use Illuminate\Http\Request;

class MenuOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = request('current_menu_price');
        $number = request('number_people');
        $menu_one_id = request('menu_one_id');
        $menu_two_id = request('menu_two_id');
        $menu_three_id = request('menu_three_id');
        $menu_four_id = request('menu_four_id');
        if(isset($menu_one_id)){
           $menu=OneDegreeMenu::find($menu_one_id);
        }
        if(isset($menu_two_id)){
           $menu=TwoDegreeMenu::find($menu_two_id);
        }
        if(isset($menu_three_id)){
           $menu=ThreeDegreeMenu::find($menu_three_id);
        }
        if(isset($menu_four_id)){
           $menu=FourDegreeMenu::find($menu_four_id);
        }
        MenuOption::create([
            'menu_one_id'=>$menu_one_id,
            'menu_two_id'=>$menu_two_id,
            'menu_three_id'=>$menu_three_id,
            'menu_four_id'=>$menu_four_id,
            'unique_id'=>'15',
            'number_people'=>$number,
            'current_menu_price'=>$price,
            'status'=>'1'

        ]);
        // dd($menu);
        return view('options.index', compact('price', 'number', 'menu_one_id', 'menu_two_id', 'menu_three_id', 'menu_four_id', 'menu'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function partly(Request $request)
    {
        $menu_one_id = request('menu_one_id');
        $number_people = request('number_people');
        $menu=OneDegreeMenu::find($menu_one_id);
        $price_req = request('current_menu_price');
        $number = request('accepted');
        $price = $price_req-($menu->price*$number);
        $price_for_one = $price/$number;
        
        $menu_two_id = request('menu_two_id');
        $menu_three_id = request('menu_three_id');
        $menu_four_id = request('menu_four_id');
        
        
        while ($number_people>$number) {
            MenuOption::create([
            'menu_one_id'=>$menu_one_id,
            'menu_two_id'=>$menu_two_id,
            'menu_three_id'=>$menu_three_id,
            'menu_four_id'=>$menu_four_id,
            'unique_id'=>'15',
            'number_people'=>$number,
            'current_menu_price'=>$price,
            'status'=>'1'

        ]);
            $random = OneDegreeMenu::inRandomOrder()
        ->where([
                ['price', '<', $price_for_one],
                ['restaurant_id', '=', $menu->restaurant_id]
            ])->first();
       
       
        return view('onedegree_choice.index', compact('random','price', 'number', 'price_for_one','menu'));
        }
            return view('options.index', compact('price', 'number', 'menu_one_id', 'menu_two_id', 'menu_three_id', 'menu_four_id', 'menu' ));
        
        

        
    }
}
