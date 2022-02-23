<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//user
Route::post("adduser",[UserController::class,'addUser']);
Route::get("login",[UserController::class,'login']);
Route::put("changePassword",[UserController::class,'changePassword']);
Route::post("forgetPasswordOTP",[UserController::class,'forgetPasswordOTP']);
Route::put("forgetPasswordOTPValidate",[UserController::class,'forgetPasswordOTPValidate']);

//middleware
Route::group(['middleware' => 'auth:sanctum'], function(){
    
});
