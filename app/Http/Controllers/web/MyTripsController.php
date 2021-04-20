<?php

namespace App\Http\Controllers\web;

use App\Models\Trip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyTripsController extends Controller
{
    public function show($id){
        $data['trips']=Trip::select('pickupDate','pickupTime','pickup','dropoff','price','gratuity','cabType','passengerCounter','PaymentType')->get();
        $data['trip']=Trip::FindOrFail($id);
        return view('web.myTrips.myTrips')->with($data);
    }
}
