<?php

namespace App\Http\Controllers;
use App\TwoDegreeMenu;
use App\Salad;
use App\Restaurant;
use App\Drink;
use Illuminate\Http\Request;

class TwoDegreeMenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = TwoDegreeMenu::all();
        return view('twodegree.index', compact('menus'));
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
        return view('twodegree.create', compact('courses_arr', 'restaurants_arr', 'salads_arr', 'drinks_arr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         TwoDegreeMenu::create([
        'salad_id' => $request->salad_id,
        'price' => $request->price,
        'restaurant_id' => $request->restaurant_id,
        'drink_id' => $request->drink_id,
        ]);
        return redirect()->route('twodegree.index');
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
        $menu = TwoDegreeMenu::find($id);
        $salads = Salad::all();
        $salads_arr = $salads->pluck('name', 'id');
        $restaurants = Restaurant::all();
        $restaurants_arr = $restaurants->pluck('name', 'id');
        $drinks = Drink::all();
        $drinks_arr = $drinks->pluck('name', 'id');
        return view('twodegree.edit', compact('salads_arr', 'restaurants_arr', 'menu', 'drinks_arr')); 
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
        $menu = TwoDegreeMenu::find($id);
        $menu->update([
            'salad_id' => $request->salad_id,
            'price'=> $request->price,
            'restaurant_id'=> $request->restaurant_id,
            'drink_id'=> $request->drink_id,
        ]);
        return redirect()->route('twodegree.index');
    }

    /** Picking random menu of the DB */
    public function choose()
    {
        $price = request('price');
        $number = request('number');
        $price_for_one = $price/$number;
        $random = TwoDegreeMenu::inRandomOrder()
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
        $menu = TwoDegreeMenu::find($id);
        $menu->delete();
        return redirect()->route('twodegree.index') ;
    }
}
