<?php

namespace App\Http\Controllers\admin;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
class AddAdminController extends Controller
{
    public function AddAdmin(){
        return view('admin.Add.AddAdmin');
    }

    public function insertadmin(Request $request){


     $validator= validator::make($request->all(),[
        'name'=>'required|string|max:255',
        'email'=>'required',
        'phone'=>'required',
        'ssn'=>'required|string|max:255',
        'password'=>'required|string|max:255',
        'bankNum'=>'required|string|max:255',
        ]);

        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url('AddAdmin'))->withErrors($error);

        }
        Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'ssn'=>$request->ssn,
            'password'=>$request->password,
            'bankNum'=>$request->bankNum,
            'phone'=>$request->	phone,

            ]);
           $request->session()->flash('success','A new admin add successfully');
           return redirect(url('/admin/informationAdmin/1'));



    }

   






}
