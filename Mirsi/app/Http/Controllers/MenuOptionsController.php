<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuOption;

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
        
        $price = request('price');
        $number = request('number');
        $price_for_one = $price/$number;
        $random = OneDegreeMenu::inRandomOrder()
        ->where('price', '<', $price_for_one)->first();
       
       
        return view('process', compact('random','price', 'number', 'price_for_one'));
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

    public function first_submit($id)
    {
        $price = request('price');
        $number = request('number');
        $price_for_one = $price/$number;

        $random = OneDegreeMenu::inRandomOrder()
        ->where('price', '<', $price_for_one)->first();
       
       
        return view('process', compact('random','price', 'number', 'price_for_one'));
    }
}
