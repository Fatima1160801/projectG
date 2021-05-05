<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{
    //
    public function showDriver(){
        $data['drivers']=Driver::select('name','ssn','salray','phone','banknumber','license','available','busy','created_at')->get();
        $data['cab']=Cab::select('cabType','cabNumber','seatNum','license','insurance','driver_id','machineNumber')->get();

    );
        return view('admin.information.Driverinformation')->with($data);

    }
    public function showAdmin(){
        $data['admins']=Admin::select('name','ssn','phone','email','bankNum','created_at')->get();

     return view('admin.information.Admininformation')->with($data);


         }



   public function showPassenger(){
        $data['pasengers']=Passenger::select('name','BZUID','email','phone','canbook','balance','created_at')->get();
        return view('admin.information.Passengerinformation')->with($data);
   }
   public function showpayment(){
    return view('admin.subAdmin.PassPayment');
}

public function subadminprofile(){
    return view('admin.subadmin.profile');
}


}


