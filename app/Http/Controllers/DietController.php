<?php

namespace App\Http\Controllers;

use App\Meal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DietController extends Controller
{
    public function show($date = null)
    {
        $date = $date ? Carbon::createFromFormat('Y-m-d', $date) : Carbon::today();
//        dd($date);

        $meals = Meal::whereDate('created_at', $date->toDateString())->with('items')->get();

        dd($meals);
    }
}
