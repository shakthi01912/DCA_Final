<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\DomesticOnly;
use Illuminate\Support\Facades\Validator;


class DomesticOnlyController extends Controller
{
    function addDomestic(Request $req){

        $validator = Validator::make($req->all(), [
   
            'Occupier' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        else{

        $domesticOnly = new DomesticOnly;

        $domesticOnly->Bill = $req->Bill;
        $domesticOnly->san = $req->san;
        $domesticOnly->Owner1 = $req->Owner1;
        $domesticOnly->Add1To4 = $req->Add1To4;
        $domesticOnly->Range = $req->Range;
        $domesticOnly->Arrears = $req->Arrears;
        $domesticOnly->TotalPaymentAmount = $req->TotalPaymentAmount;
        $domesticOnly->TakePhoto = $req->TakePhoto;
        $domesticOnly->Occupier = $req->Occupier;
        $domesticOnly->OwenersName = $req->OwenersName;
        $domesticOnly->CorrectOwnersName = $req->CorrectOwnersName;
        $domesticOnly->OwnersTelNo = $req->OwnersTelNo;
        $domesticOnly->TenantsName = $req->TenantsName;
        $domesticOnly->TenantsTelNo = $req->TenantsTelNo;
        $domesticOnly->Nationality = $req->Nationality;
        $domesticOnly->PropertyUsage = $req->PropertyUsage;
        $domesticOnly->PropertyType = $req->PropertyType;
        $domesticOnly->DRCode = $req->DRCode;
        $domesticOnly->Remarks = $req->Remarks;
        $domesticOnly->DR05 = $req->DR05;
        $domesticOnly->WatermeterNumber = $req->WatermeterNumber;

        if($req->file('WatermeterNumber') == null ) {
            $subCategory->image = "null";
            
        } else {
            $fileName = $req->file('WatermeterNumber')->getClientOriginalName();
            $filePath = $req->file('WatermeterNumber')->storeAs('users', $fileName, 'public');
            $domesticOnly->WatermeterNumber = '/storage/' . $filePath;
        }

        $result  = $domesticOnly->save();

        

        return response([
            'errorMessage' => false,
            'message' => "Info Added!"
        ]);
        }
    }

    function updateDomestic(Request $req){

        $domesticOnly = DomesticOnly::find($req->id);

        

        if(!$domesticOnly){
            return response([
                'errorMessage' => true,
                'message' => "The id is not existed"
            ]);
        }

        $domesticOnly->TakePhoto = $req->TakePhoto;
        $domesticOnly->Occupier = $req->Occupier;
        $domesticOnly->OwenersName = $req->OwenersName;
        $domesticOnly->CorrectOwnersName = $req->CorrectOwnersName;
        $domesticOnly->OwnersTelNo = $req->OwnersTelNo;
        $domesticOnly->TenantsName = $req->TenantsName;
        $domesticOnly->TenantsTelNo = $req->TenantsTelNo;
        $domesticOnly->Nationality = $req->Nationality;
        $domesticOnly->PropertyUsage = $req->PropertyUsage;
        $domesticOnly->PropertyType = $req->PropertyType;
        $domesticOnly->DRCode = $req->DRCode;
        $domesticOnly->Remarks = $req->Remarks;
        $domesticOnly->DR05 = $req->DR05;
        $domesticOnly->WatermeterNumber = $req->WatermeterNumber;
           
            
        $result  = $domesticOnly->save();
    
        return response([
            'errorMessage' => false,
            'message' => "Details have been updated!!"
        ]);
        
    }


    function deleteDomestic(Request $req){

        $domesticOnly = DomesticOnly::find($req->id);

        if(!$domesticOnly){
            return response([
                'errorMessage' => true,
                'message' => "The batch id is not existed"
            ]);
        }
            
            $domesticOnly->delete();
            return response([
                'errorMessage' => false,
                'message' => "Deleted Successfuly!"
            ]);
        
    }


    function viewDomestic(){
        return DomesticOnly::all();
    }
}
