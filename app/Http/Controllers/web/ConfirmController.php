<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function show($id){
        $data['trips']=Trip::select('pickup','dropoff','pickupDate','price','pickupTime','gratuity')->get();
        $data['trip']=Trip::FindOrFail($id);

        return view('web.confirm.confirm')->with($data);

    }
}
