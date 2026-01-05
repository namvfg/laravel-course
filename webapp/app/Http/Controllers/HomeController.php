<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        //Select * from cars
        $cars = Car::get();

        //Select published cars
        $published_cars = Car::where("published_at", "!=", null)->get();

        //Select first car
        $first_car = Car::where("published_at", "!=", null)->first();

        dump($first_car);
        return view("home.index");
    }
}
