<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quanlynhansu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quanlynhansu = quanlynhansu::all();
        return view('index')->with('quanlynhansu', $quanlynhansu);
    }
}
