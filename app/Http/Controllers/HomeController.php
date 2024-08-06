<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $stocks = Stock::all();
        return view('home')->with('stocks', $stocks);
    }
}
