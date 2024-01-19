<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class DashboardController extends Controller
{
    public function index()
    {

        $veryGoodRating = Patient::select("*")
                        ->where("rating", "=", "Very Good")
                        ->get()
                        ->count();

        $goodRating = Patient::select("*")
                        ->where("rating", "=", "Good")
                        ->get()
                        ->count();

        $fairRating = Patient::select("*")
                        ->where("rating", "=", "Fair")
                        ->get()
                        ->count();

        $poorRating = Patient::select("*")
                        ->where("rating", "=", "Poor")
                        ->get()
                        ->count();
        return view('dashboard.index')->with("veryGoodRating",$veryGoodRating)
        ->with("goodRating",$goodRating)
        ->with("fairRating",$fairRating)
        ->with("poorRating",$poorRating);
    }
}
