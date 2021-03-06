<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerDatasController;
use App\Http\Controllers\CustomerData1Controller;
use App\Http\Controllers\DomesticOnlyController;
use App\Http\Controllers\AdminController;

//user
Route::post("adduser",[UserController::class,'addUser']);
Route::get("login",[UserController::class,'login']);
Route::put("changePassword",[UserController::class,'changePassword']);
Route::post("forgetPasswordOTP",[UserController::class,'forgetPasswordOTP']);
Route::put("forgetPasswordOTPValidate",[UserController::class,'forgetPasswordOTPValidate']);
Route::get("viewUser",[UserController::class,'viewUser']);
Route::post("updateUser",[UserController::class,'updateUser']);


//admin
Route::post("addadmin",[AdminController::class,'addAdmin']);
Route::get("login",[AdminController::class,'login']);
Route::put("changePassword",[AdminController::class,'changePassword']);
Route::post("forgetPasswordOTP",[AdminController::class,'forgetPasswordOTP']);
Route::put("forgetPasswordOTPValidate",[AdminController::class,'forgetPasswordOTPValidate']);
Route::get("viewadmin",[AdminController::class,'viewAdmin']);
Route::post("updateadmin",[AdminController::class,'updateAdmin']);


//customerData
Route::get("viewInfo",[CustomerDatasController::class,'viewInfo']);
Route::post("addInfo",[CustomerDatasController::class,'addInfo']);

Route::get("viewInfoSecond",[CustomerData1Controller::class,'viewInfoSecond']);
Route::post("addInfoSecond",[CustomerData1Controller::class,'addInfoSecond']);

// Route::get("retrieveByFileType",[CustomerDatasController::class,'retrieveByFileType']);




Route::get("getDetailsByType/{type}",[CustomerDatasController::class,'getDetailsByType']);


//middleware
Route::group(['middleware' => 'auth:sanctum'], function(){

    Route::post("updateUser",[UserController::class,'updateUser']);


    //customer data
    Route::put("updateInfo",[CustomerDatasController::class,'updateInfo']);
    Route::delete("deleteInfo",[CustomerDatasController::class,'deleteInfo']);

    Route::put("updateInfoSecond",[CustomerData1Controller::class,'updateInfoSecond']);
    Route::delete("deleteInfoSecond",[CustomerData1Controller::class,'deleteInfoSecond']);

    //Domestic 
    Route::post("addDomestic",[DomesticOnlyController::class,'addDomestic']);
    Route::get("viewDomestic",[DomesticOnlyController::class,'viewDomestic']);
    Route::put("updateDomestic",[DomesticOnlyController::class,'updateDomestic']);
    Route::delete("deleteDomestic",[DomesticOnlyController::class,'deleteDomestic']);
});
