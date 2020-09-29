<?php

namespace App\Http\Controllers;
use App\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('home', compact('restaurants'));
    }

    public function admin()

    {

        return view('admin');

    }
    public function menu()
    {
        return view('menus.choose_menu');
    }
}
