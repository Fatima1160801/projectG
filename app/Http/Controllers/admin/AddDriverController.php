<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Cab;
class AddDriverController extends Controller
{
    public function AddDriver(){
        return view('admin.Add.addDriver');
    }





    public function insertdriver(Request $request){
        $validator= validator::make($request->all(),[
        'name'=>'required|string|max:255',
        'phone'=>'required|string|max:255',
        'ssn'=>'required|string|max:255',
        'email'=>'required',
        'password'=>'required|string|max:255',
        'banknumber'=>'required',

        'cabType'=>'required',
        'cabNumber' => 'required',
        'seatNum'=>'required',
        'license'=>'required',
        'insurance'=>'required',
        'machineNumber'=>'required'

        ]);

       if($validator->fails()){
            $error=$validator->errors();
            return redirect(url('/admin/AddDriver/1'))->withErrors($error);

        }
       $driver=Driver::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'ssn'=>$request->ssn,
        'email'=>$request->email,
        'password'=>$request->password,
        'banknumber'=>$request->banknumber,

        ]);


     $driverid=$driver->id;

     $data=Cab::create([
         'cabType'=>$request->cabType,
        'cabNumber'=>$request->cabNumber,
        'seatNum'=>$request->seatNum,
        'license'=>$request->license,
        'insurance'=>$request->insurance,
        'machineNumber'=>$request->machineNumber,
        'driver_id'=>$driverid,

         ]);


    $request->session()->flash('success','A new driver with his cab add successfully');
     return redirect(url('/admin/informationDriver/1'));




       }





}
