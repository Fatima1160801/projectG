<?php

use App\Http\Controllers\admin\AddAdmin;
use App\Http\Controllers\admin\AddAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\LangController;
use App\Http\Controllers\web\RateController;
use App\Http\Controllers\admin\VansController;
use App\Http\Controllers\web\BookedController;
use App\Http\Controllers\admin\BusesController;
use App\Http\Controllers\admin\ExtraController;
use App\Http\Controllers\admin\TaxisController;
use App\Http\Controllers\web\ConfirmController;
use App\Http\Controllers\web\MyTripsController;
use App\Http\Controllers\web\ProfileController;
use App\Http\Controllers\web\RewardsController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\AddDriverController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\RushHoursController;
use App\Http\Controllers\admin\InformationController;
use App\Http\Controllers\driver\DriverHomeController;
use App\Http\Controllers\driver\DriverRateController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\TrackDriversController;
use App\Http\Controllers\driver\DriverTripsController;
use App\Http\Controllers\admin\ManageRewardsController;
use App\Http\Controllers\admin\NotificationsController;
use App\Http\Controllers\admin\TrackEarningsController;
use App\Http\Controllers\driver\DriverCreditController;
use App\Http\Controllers\admin\ManualBookingsController;
use App\Http\Controllers\driver\DriverEarningController;
use App\Http\Controllers\driver\DriverProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    Route::middleware('lang')->group(function () {
//register and login
//Route::get('/login/{id}',[loginController::class,'show']);
//Route::get('/login-forgetPass/{id}',[loginController::class,'forgetPassShow']);


//Passsenger
Route::get('/{id}',[HomeController::class,'show'])->middleware(['auth','verified','passenger']);
Route::get('/passenger/My-Profile/{id}',[ProfileController::class,'show'])->middleware(['auth','verified','passenger']);
Route::get('/passenger/My-Rate/{id}',[RateController::class,'show'])->middleware(['auth','verified','passenger']);
Route::get('/passenger/Newbooking-booked/{id}',[BookedController::class,'show'])->middleware(['auth','verified','passenger']);
Route::get('/passenger/Newbooking-confirm/{id}',[ConfirmController::class,'show'])->middleware(['auth','verified','passenger']);
Route::get('/passenger/My-Trips/{id}',[MyTripsController::class,'show'])->middleware(['auth','verified','passenger']);
Route::get('/passenger/Rewards/{id}',[RewardsController::class,'show'])->middleware(['auth','verified','passenger']);

//insert data to database Passenger (Post)
Route::post('/requestVanTrip/{id}',[HomeController::class,'requestTripVan']);
Route::post('/requestTaxiTrip/{id}',[HomeController::class,'requestTripTaxi']);
Route::post('/requestBusTrip/{id}',[HomeController::class,'requestBusTrip']);

Route::post('/insertadmin',[AddAdminController::class,'insertadmin']);
Route::post('/insertdriver',[AddDriverController::class,'insertdriver']);
Route::post('/insertcab',[AddDriverController::class,'insertcab']);

//Admin
Route::get('/admin/{id}',[AdminHomeController::class,'show']);
Route::get('/admin/Admin-Profile/{id}',[AdminProfileController::class,'show']);
Route::get('/admin/AddDriver/{id}',[AddDriverController::class,'AddDriver']);
Route::get('/admin/AddAdmin/{id}',[AddAdminController::class,'AddAdmin']);

Route::get('/admin/informationDriver/{id}',[InformationController::class,'showDriver']);
Route::get('/admin/informationAdmin/{id}',[InformationController::class,'showAdmin']);
Route::get('/admin/informationPassenger/{id}',[InformationController::class,'showPassenger']);
Route::get('/subadmin/profile/{id}',[InformationController::class,'subadminprofile']);
Route::get('/subadmin/payment/{id}',[InformationController::class,'showpayment']);
Route::get('/admin/Extra/{id}',[ExtraController::class,'show']);
Route::get('/admin/ManageRewards/{id}',[ManageRewardsController::class,'show']);
Route::get('/admin/ManualBookings/{id}',[ManualBookingsController::class,'show']);
Route::get('/admin/Messages/{id}',[MessagesController::class,'show']);
Route::get('/admin/Notifications/{id}',[NotificationsController::class,'show']);
Route::get('/admin/RushHours/{id}',[RushHoursController::class,'show']);
Route::get('/admin/TrackDrivers/{id}',[TrackDriversController::class,'show']);
Route::get('/admin/TrackEarnings/{id}',[TrackEarningsController::class,'show']);

//-----------trips---------------------------------------------------------------------------------------
//-----------trips/bus------------------------------------------------------------------------------------
Route::get('/admin/Buses/{id}',[BusesController::class,'show']);
Route::get('/admin/insertBusesTrip',[BusesController::class,'insertBus']);
Route::get('/admin/AddNewBusesTrip',[BusesController::class,'addBus']);

//-------------------------------------------------------------------------------------------------------
Route::get('/admin/Taxis/{id}',[TaxisController::class,'show']);
Route::get('/admin/Vans/{id}',[VansController::class,'show']);

//Post Method for Admin
Route::post('/addDriver/{id}',[InformationController::class,'addDriver']);





//Driver
Route::get('/driver/{id}',[DriverHomeController::class,'show']);
Route::get('/driver/Driver-Profile/{id}',[DriverProfileController::class,'show']);
Route::get('/driver/Driver-Rate/{id}',[DriverRateController::class,'show']);
Route::get('/driver/Driver-Trips/{id}',[DriverTripsController::class,'show']);
Route::get('/driver/Earning/{id}',[DriverEarningController::class,'show']);
Route::get('/driver/DriverCredit/{id}',[DriverCreditController::class,'show']);

//

    });

Route::get('/lang/set/{lang}',[LangController::class,'set']);
