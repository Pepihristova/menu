<?php

namespace App\Http\Controllers;
use App\ThreeDegreeMenu;
use App\Salad;
use App\Restaurant;
use App\Drink;
use App\Main;
use Illuminate\Http\Request;

class ThreeDegreeMenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = ThreeDegreeMenu::all();
        return view('threedegree.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salads = Salad::all();
        $salads_arr = $salads->pluck('name','id');
        $restaurants = Restaurant::all();
        $restaurants_arr = $restaurants->pluck('name','id');
        $drinks = Drink::all();
        $drinks_arr = $drinks->pluck('name','id');
        $mains = Main::all();
        $mains_arr = $mains->pluck('name','id');
        return view('threedegree.create', compact('courses_arr', 'restaurants_arr', 'salads_arr', 'drinks_arr', 'mains_arr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ThreeDegreeMenu::create([
        'salad_id' => $request->salad_id,
        'price' => $request->price,
        'restaurant_id' => $request->restaurant_id,
        'drink_id' => $request->drink_id,
        'main_id' => $request->main_id,
        ]);
        return redirect()->route('threedegree.index');
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
        $menu = ThreeDegreeMenu::find($id);
        $salads = Salad::all();
        $salads_arr = $salads->pluck('name', 'id');
        $restaurants = Restaurant::all();
        $restaurants_arr = $restaurants->pluck('name', 'id');
        $drinks = Drink::all();
        $drinks_arr = $drinks->pluck('name', 'id');
        $mains = Main::all();
        $mains_arr = $mains->pluck('name', 'id');
        return view('threedegree.edit', compact('salads_arr', 'restaurants_arr', 'menu', 'drinks_arr', 'mains_arr')); 
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
        $menu = ThreeDegreeMenu::find($id);
        $menu->update([
            'salad_id' => $request->salad_id,
            'price'=> $request->price,
            'restaurant_id'=> $request->restaurant_id,
            'drink_id'=> $request->drink_id,
            'main_id'=> $request->main_id,
        ]);
        return redirect()->route('threedegree.index');
    }

    public function choose()
    {
        $price = request('price');
        $number = request('number');
        $price_for_one = $price/$number;
        $random = ThreeDegreeMenu::inRandomOrder()
        ->where('price', '<', $price_for_one)->first();
       
       
        return view('process', compact('random','price', 'number', 'price_for_one'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = ThreeDegreeMenu::find($id);
        $menu->delete();
        return redirect()->route('threedegree.index') ;
    }
}
