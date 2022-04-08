<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

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
        $role = config('roles.models.role')::where('name', '=', 'User')->first();  //choose the default role upon user creation.
        //dd($role);
       (auth()->user()->attachRole($role)) ;
       $books=Books::all();


        return  view('home',['books'=>$books]);
    }
}
