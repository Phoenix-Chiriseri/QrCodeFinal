<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Mail\PatientInformation;
use Illuminate\Support\Facades\Mail;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewVeryGood()
    {
        //
        $patients = Patient::select("*")
                        ->where("rating", "=", "Very Good")
                        ->orderBy('id', 'desc')
                        ->get();
        //dd($veryGoodRating);
        return view("pages.very-good")->with("patients",$patients);
    
    }

    public function viewGood()
    {
        //
        $patients = Patient::select("*")
                        ->where("rating", "=", "Good")
                        ->orderBy('id', 'desc')
                        ->get();
        //dd($veryGoodRating);
        return view("pages.good")->with("patients",$patients);
    
    }


    public function viewFair()
    {
        //
        $patients = Patient::select("*")
                        ->where("rating", "=", "Fair")
                        ->orderBy('id', 'desc')
                        ->get();
        //dd($veryGoodRating);
        return view("pages.fair")->with("patients",$patients);
    
    }

    public function viewPoor()
    {
        //
        $patients = Patient::select("*")
                        ->where("rating", "=", "Poor")
                        ->orderBy('id', 'desc')
                        ->get();
        //dd($veryGoodRating);
        return view("pages.poor")->with("patients",$patients);
    
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

     //   dd($request->all());
        try {

            $patient = Patient::create($request->all());
            // Display a success message using SweetAlert
            Mail::to('itaineichiriseri@gmail.com')->send(new PatientInformation($request->all()));
            return redirect()->route('form')->with('success', 'Patient information saved successfully!');
        }catch(Exception $e){
            return redirect()->route('form')->with('success', 'Patient information saved successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
