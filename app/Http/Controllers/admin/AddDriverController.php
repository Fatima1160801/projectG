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


        ]);

       if($validator->fails()){
            $error=$validator->errors();
            return redirect(url('/admin/AddDriver/1'))->withErrors($error);

        }
        Driver::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'ssn'=>$request->ssn,
        'email'=>$request->email,
        'password'=>$request->password,
        'banknumber'=>$request->banknumber,

        ]);
    $request->session()->flash('success','A new driver with his cab add successfully');
     return redirect(url('/admin/informationDriver/1'));


       }



}
