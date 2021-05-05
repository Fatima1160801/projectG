<?php

namespace App\Http\Controllers\web;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function show($id){

        $data['trips']=Trip::select('cabType','pickupDate','pickupTime','pickup','dropoff','price','gratuity','passengerCounter','PaymentType')->get();
        $data['trip']=Trip::FindOrFail($id);
        return view('web.home.New-Booking')->with($data);
    }
        // function request trip cab type van

    public function requestTripVan(Request $request,$id){
        $user=Auth::user();
      $validator= Validator::make($request->all(),[

            'pickupDate'=>'required',
            'pickupTime'=>'required',
            'pickup'=>'required',
            'dropoff'=>'required',
            'passengerCounter'=>'required',
            'PaymentType'=>'required',
            'DriverNote'=>'required',

        ]);
        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/"))->withErrors($error);
        }
        Trip::create($request->all(),[
            'cabType' => $request->cabType,
            'pickupDate' => $request->pickupDate,
            'pickupTime' => $request->pickupTime,
            'pickup' => $request->pickup,
            'dropoff' =>  $request->dropoff,
            'passengerCounter'=> $request->passengerCounter,
            'PaymentType' =>  $request->PaymentType,
            'DriverNote' =>  $request->DriverNote,

        ]);
        //$data['trip']=Trip::FindOrFial($id);
       $request->session()->flash('success','your request sent successflly');
       return redirect(url("/passenger/Newbooking-confirm/$id"));

    }
   /*  public function rquestShow(){
        return view('web.home.test');
    } */
    // function request trip cab type Taxi
    public function requestTripTaxi(Request $request , $id){
        $user=Auth::user();
        $validator=Validator::make($request->all(),[
           'pickupDate'=>'required',
           'pickupTime'=>'required',
           'pickup'=>'required',
           'dropoff'=>'required',
           'PaymentType'=>'required',
           'DriverNote'=>'required',

        ]);
        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/1"))->withErrors($error);
        }
        Trip::create($request->all(),[
            'cabType' => $request->cabType,
            'pickupDate' => $request->pickupDate,
            'pickupTime' => $request->pickupTime,
            'pickup' => $request->pickup,
            'dropoff' =>  $request->dropoff,
            'PaymentType' =>  $request->PaymentType,
            'DriverNote' =>  $request->DriverNote,

        ]);
        //$trip=Trip::findOrFial($id)->first();

        $request->session()->flash('success','your request sent successflly');
        return redirect(url("/passenger/Newbooking-confirm/$id"));
    }
    //function for bus request tirp
    public function requestBusTrip($id,Request $request){

        dd($request->all());
        $request->validate([
            'cabType'=>'required',
            'passengerCounter'=>'required|array',
            'PaymentType'=>'required|array'

        ]);
        $trip=Trip::findOrFial($id);
    }
}
