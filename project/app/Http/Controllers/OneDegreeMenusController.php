<?php

namespace App\Http\Controllers;
use App\OneDegreeMenu;
use App\Salad;
use App\Restaurant;
use Illuminate\Http\Request;

class OneDegreeMenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = OneDegreeMenu::all();
        return view('onedegree.index', compact('menus'));
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
        return view('onedegree.create', compact('courses_arr', 'restaurants_arr', 'salads_arr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OneDegreeMenu::create([
        'salad_id' => $request->salad_id,
        'price' => $request->price,
        'restaurant_id' => $request->restaurant_id,
        ]);
        return redirect()->route('onedegree.index');
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
        $menu = OneDegreeMenu::find($id);
        $salads = Salad::all();
        $salads_arr = $salads->pluck('name', 'id');
        $restaurants = Restaurant::all();
        $restaurants_arr = $restaurants->pluck('name', 'id');
        return view('onedegree.edit', compact('salads_arr', 'restaurants_arr', 'menu')); 
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
        $menu = OneDegreeMenu::find($id);
        $menu->update([
            'salad_id' => $request->salad_id,
            'price'=> $request->price,
            'restaurant_id'=> $request->restaurant_id,
        ]);
        return redirect()->route('onedegree.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = OneDegreeMenu::find($id);
        $menu->delete();
        return redirect()->route('onedegree.index') ;   
    }
}
