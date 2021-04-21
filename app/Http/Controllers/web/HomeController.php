<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function show($id){

        $data['trips']=Trip::select('pickupDate','pickupTime','pickup','dropoff','price','gratuity','cabType','passengerCounter','PaymentType')->get();
        $data['trip']=Trip::FindOrFail($id);
        return view('web.home.New-Booking')->with($data);
    }
        // function request trip cab type van

    public function requestTripVan(Request $request){
      $validator= Validator::make($request->all(),[

            'date'=>'required',
            'time'=>'required',
            'Pickup'=>'required',
            'Dropoff'=>'required',
            'numPass'=>'required',
            'PaymentType'=>'required',
            'DriverNote'=>'required',

        ]);
        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url('/1'))->withErrors($error);
        }


         $data=Trip::create([
            'van'=>$request->cabType,
            'date'=>date("Y-m-d", strtotime($request->pickupDate)),
            'time'=>$request->pickupTime,
            'Pickup'=>$request->pickup,
            'Dropoff'=>$request->dropoff,
            'numPass'=>$request->passengerCounter,
            'PaymentType'=>$request->PaymentType,


        ]);
        dd($data);

       $request->session()->flash('success','your request sent successflly');
       return redirect(url('/passenger/Newbooking-confirm/2'));

    }
   /*  public function rquestShow(){
        return view('web.home.test');
    } */
    // function request trip cab type Taxi
    public function requestTripTaxi(Request $request , $id){
        $validator=Validator::make($request->all(),[
            'date'=>'required',
            'time'=>'required',
            'Pickup'=>'required',
            'Dropoff'=>'required',
            'PaymentType'=>'required',
            'DriverNote'=>'required',

        ]);
        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url('/1'))->withErrors($error);
        }

        $data=Trip::create([
            'taxi'=>$request->cabType,
            'date'=>date("Y-m-d", strtotime($request->pickupDate)),
            'time'=>$request->pickupTime,
            'Pickup'=>$request->pickup,
            'Dropoff'=>$request->dropoff,
            'PaymentType'=>$request->PaymentType,
            'DriverNote'=>$request->DriverNote,

        ]);
        dd($data);
        $request->session()->flash('success','your request sent successflly');
        return redirect(url('/passenger/Newbooking-confirm/2'));
    }
    //function for bus request tirp
    public function requestBusTrip(Request $request){
        $validator=Validator::make($request->all(),[


        ]);
    }
}
