<?php

namespace App\Http\Controllers;
use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    //
    public function show(Cars $cars)
     {

      $cars = $cars->all();
     return view('somenew', compact('cars'));
     }
}
