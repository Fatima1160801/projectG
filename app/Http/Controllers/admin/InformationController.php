<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Cab;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{
    //
    public function showDriver(){
        $data['drivers']=Driver::paginate(5);

        //  $data['cab']=$data['drivers']->cabs();
      // dd( $data=Driver::findOrFail(3));
       //$cab=$data->cabs;
       //dd($data['drivers']);
      //$s= $data['drivers'][1];
       //dd($s);
       // dd($s->cabs);

        return view('admin.information.Driverinformation')->with($data);

    }
    public function showAdmin(){
        $data['admins']=Admin::paginate(5);

     return view('admin.information.Admininformation')->with($data);


         }
   public function showPassenger(){
        $data['pasengers']=Passenger::select('name','BZUID','email','phone','canbook','balance','created_at')->paginate(2);
        return view('admin.information.Passengerinformation')->with($data);
   }
   public function showpayment(){
    return view('admin.subAdmin.PassPayment');
}

public function subadminprofile(){
    return view('admin.subadmin.profile');
}


public function driverdelete( Driver $driver){

    $driver->delete();

    return back();
}



public function admindelete(Admin $admin){

    $admin->delete();

    return back();
}






   public function driverupdate(Request $request){
    $validator= validator::make($request->all(),[
    'name'=>'required|string|max:255',
    'phone'=>'required|string|max:255',
    'email'=>'required',


    ]);

   if($validator->fails()){
        $error=$validator->errors();
        return redirect(url('/admin/AddDriver/1'))->withErrors($error);

    }
   Driver::findOrFail($request->id)->update([
    'name'=>$request->name,
    'phone'=>$request->phone,
    'email'=>$request->email,


    ]);


$request->session()->flash('success','A new driver with his cab add successfully');
 return redirect(url('/admin/informationDriver/1'));




   }




public function updatecab($id){


}





public function showCab($id){

    $data=Driver::findOrFail($id);
    $cab=$data->cabs;
    return view('admin.information.Driverinformation')->with($cab);

}
//public function Cab($id){
 //$data['driver']=Driver::findOrFail($id);
 //$data['cabs']=$data['driver']->cabs;
//return view('admin.information.Driverinformation')->with($data);
//}

}


