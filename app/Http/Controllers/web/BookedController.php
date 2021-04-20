<?php

namespace App\Http\Controllers\web;

use App\Models\Trip;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Passenger_Trip;
use App\Http\Controllers\Controller;

class BookedController extends Controller
{
    public function show($id){
        $data['trips']=Trip::select('pickupDate','pickupTime','pickup','dropoff','price','gratuity','cabType','passengerCounter','PaymentType')->get();
        $data['trip']=Trip::FindOrFail($id);
        $data['PassengerTrip']=Passenger_Trip::select('seatNum','note','passenger_id','trip_id')->get();
        $data['PassengerTrip']=Passenger_Trip::FindOrFail($id);
        $data['passenger']=Passenger::select('name','phone','email')->get();
        $data['passenger2']=$data['PassengerTrip']->Passenger_Trip;

        return view('web.booked.booked')->with($data);
    }
}
