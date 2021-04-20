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
    public function requestTripVan(Request $request){
      $validator= Validator::make($request->all(),[

            'date'=>'required',
            'time'=>'required',
            'Pickup'=>'required',
            'Dropoff'=>'required',
            'numPass'=>'required',
            'paymentType'=>'required',
            'DriverNote'=>'required',

        ]);
        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url('/1'))->withErrors($error);
        }


         $data=Trip::create([
            'van'=>$request->cabType,
            'date'=>$request->pickupDate,
            'time'=>$request->pickupTime,
            'Pickup'=>$request->pickup,
            'Dropoff'=>$request->dropoff,
            'numPass'=>$request->passengerCounter,
            'paymentType'=>$request->PaymentType,


        ]);
        dd($data);

       $request->session()->flash('success','your request sent successflly');
       return redirect(url('/passenger/Newbooking-confirm/2'));

    }
    public function rquestShow(){
        return view('web.home.test');
    }

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

        Trip::create([
            'taxi'=>$request->cabType,
            'date'=>date("d-m-Y", strtotime($request->pickupDate)),
            'time'=>$request->pickupTime,
            'Pickup'=>$request->pickup,
            'Dropofff'=>$request->dropoff,
            'PaymentType'=>$request->PaymentType,
            'DriverNote'=>$request->DriverNote,

        ]);
        $request->session()->flash('success','your request sent successflly');
        return redirect(url('/passenger/Newbooking-confirm/2'));
    }
}
