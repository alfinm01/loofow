<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function dummy1()
    {
        $posts[0] = [
            'name' => 'Ayam',
            'date' => '21-11-2019',
            'type' => 'lost'
        ];
        $posts[1] = [
            'name' => 'Bebek',
            'date' => '22-12-2019',
            'type' => 'found'
        ];

        return view('pages/dashboard', ['posts' => $posts]);
    }
}
