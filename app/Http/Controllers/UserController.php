<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Mail;

class UserController extends Controller
{

    function addUser(Request $req){

        $validator = Validator::make($req->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',  
        ]);

        if ($validator->fails()) {
            return response([
                'errorMessage' => true,
                'message' => $validator->errors()
            ]);
        }

        $result = Users::where('email',$req->email)->first();

        if ($result) {
            return response([
                'errorMessage' => true,
                'message' => "Email Already Registered!!!!!!"
            ]);
        }
        
        $userModel = new Users;

        $userModel ->name = $req->name;
        $userModel ->email = $req->email;
        $userModel ->password = Hash::make($req->password);

    
        $result  = $userModel->save();

        $emailData = [
            'FirstName' => $userModel->name,
            'Email' => $userModel->email,
            'subject' => "Your account has been created successfully!!",
            'fromEmail' => "DCA@gmail.com",
            'fromName' => "DCA"
        ];
    
        $data = array('FirstName'=> $userModel->name,'Email'=> $userModel->email);


        Mail::send('VerifyEmail', $data, function($message) use ($emailData){
                $message->to( $emailData['Email'], 
                $emailData['FirstName'])->subject($emailData['subject']);
                $message->from( $emailData['fromEmail'],$emailData['fromName']);
        });

        return response([
            'errorMessage' => false,
            'message' => "Account has been created!!"
        ]);
    } 

    function login(Request $request)
    {
        $user= Users::where('email', $request->email)->first();
        
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }


    function changePassword(Request $req){
           
        $user = Users::where('id', $req->id)->first();
        
        if (!$user || !Hash::check($req->oldPassword, $user->password)) {
            return response([
                'errorMessage' => true,
                'message' => 'Id or Password is wrong'
            ]);
        }
        
            $user->id = $req->id;
            $user->password = Hash::make($req->newPassword);

            $result  =  $user ->save();
            return response([
                'errorMessage' => false,
                'message' => "Password has been changed"
            ]);
    }

    function forgetPasswordOTP(Request $req){

        $email = $req->email;
        $user = Users::where('email', $req->email)->first();
       
        if( is_null($user)){
            return response([
                'errorMessage' => true,
                'message' => 'User is not found'
            ]);
        }
       
            //getting otp from generate random string function
            $otp = $this->generateRandomString();

            $user->otp = $otp;
            $result = $user->save();

                if(!$result){
                    return response([
                        'errorMessage' => true,
                        'message' => 'Otp has not been added in Database'
                    ]);
                }
  
            $emailData = [
                'email' => $user->email,
                'OTP'=> $otp,
                'subject' => "OTP has been sent!",
                'fromEmail' => "mangakiku@gmail.com",
                'fromName' => "DCA"
            ];  
  
            $data = array('email'=> $user->email,'OTP'=> $otp);

            Mail::send('OtpValidate', $data, function($message) use ($emailData){
                $message->to( $emailData['email'],
                $emailData['OTP'])->subject($emailData['subject']);
                $message->from( $emailData['fromEmail'],$emailData['fromName']);
            });
        

            return response([
                'errorMessage' => false,
                'message' => "OTP has sent sucessfuly!!"
            ]);
    }


    function forgetPasswordOTPValidate(Request $req){

        $user = Users::where('email', $req->email)->first();
         
        if (!$user || $req->otp != $user->otp) {
            return response([
                'errorMessage' => true,
                'message' => 'Email or Otp incorrect'
            ]);
        }

            $user->password = Hash::make($req->newPassword);

            $result  = $user ->save();
            return response([
                'errorMessage' => false,
                'message' => " Changed successfully!!!"
            ]);
    }



    function generateRandomString($length = 8) {
            
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
    }

     function viewUser(){
         return Users::all();
     }
    
     function updateUser(request $req){

        $validator = Validator::make($req->all(), [
            'name' => 'string',
            'email' => 'email',
            'password' => 'string',  
        ]);

        if ($validator->fails()) {
            return response([
                'errorMessage' => true,
                'message' => $validator->errors()
            ]);
        }

        else {
            $userModel = new Users;

            $userModel->name = $req->name;
            $userModel->email = $req->email;
            $userModel->password = $req->password;

            $userModel->save();
        }
         
     }

}