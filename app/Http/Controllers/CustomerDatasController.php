<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerData;

class CustomerDatasController extends Controller
{
    
    function viewInfo(){

        return CustomerData::all();
    }



    function addInfo(Request $req){

        $customerDataModel = new CustomerData;

        $customerDataModel -> Exclude = $req->Exclude;
        $customerDataModel -> IWKsSpecialInstruction = $req->IWKsSpecialInstruction;
        $customerDataModel -> DCAFileType = $req->DCAFileType;
        $customerDataModel -> DCAName	 = $req->DCAName	;
        $customerDataModel -> DCACode = $req->DCACode;
        $customerDataModel -> State = $req->State;
        $customerDataModel -> CostCode	 = $req->CostCode;
        $customerDataModel -> UO = $req->UO;
        $customerDataModel -> LAName = $req->LAName;
        $customerDataModel -> BillNo = $req->BillNo;
        $customerDataModel -> SAN = $req->SAN;
        $customerDataModel -> CustomersTelephoneNo = $req->CustomersTelephoneNo;
        $customerDataModel -> CustomersMobileNo = $req->CustomersMobileNo;
        $customerDataModel -> CustomersFaxNo = $req->CustomersFaxNo;
        $customerDataModel -> CustomersEmail = $req->CustomersEmail;
        $customerDataModel -> Owner1 = $req->Owner1;
    
    
        $result  = $customerDataModel->save();

    }



    function updateInfo(Request $req){
        
        $customerDataModel = CustomerData::find(Auth::Users()->id);

        if(!$customerDataModel){
            return response([
                'errorMessage' => true,
                'message' => "Theid is not valid"
            ]);
        }

        // $validator = Validator::make($req->all(), [
        //     'Exclude' => 'string',
        //     'IWKsSpecialInstruction' => 'string',
        //     'DCAFileType' => 'string',
        //     'DCAName' => 'string',
        //     'DCACode' => 'string',
        //     'State' => 'string',
        //     'CostCode' => 'string',
        //     'UO' => 'string',
        //     'LAName' => 'string',
        //     'BillNo' => 'string',
        //     'SAN' => 'string',
        //     'CustomersTelephoneNo' => 'string',
        //     'CustomersMobileNo' => 'string',
        //     'CustomersFaxNo' => 'string',
        //     'CustomersEmail'=> 'string',
        //     'Owner1' => 'string',

        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors());
        // }

        $customerDataModel -> Exclude = $req->Exclude;
        $customerDataModel -> IWKsSpecialInstruction = $req->IWKsSpecialInstruction;
        $customerDataModel -> DCAFileType = $req->DCAFileType;
        $customerDataModel -> DCAName	 = $req->DCAName	;
        $customerDataModel -> DCACode = $req->DCACode;
        $customerDataModel -> State = $req->State;
        $customerDataModel -> CostCode	 = $req->CostCode;
        $customerDataModel -> UO = $req->UO;
        $customerDataModel -> LAName = $req->LAName;
        $customerDataModel -> BillNo = $req->BillNo;
        $customerDataModel -> SAN = $req->SAN;
        $customerDataModel -> CustomersTelephoneNo = $req->CustomersTelephoneNo;
        $customerDataModel -> CustomersMobileNo = $req->CustomersMobileNo;
        $customerDataModel -> CustomersFaxNo = $req->CustomersFaxNo;
        $customerDataModel -> CustomersEmail = $req->CustomersEmail;
        $customerDataModel -> Owner1 = $req->Owner1;

    
        
        $result  = $customerDataModel->save();

        return response([
            'errorMessage' => false,
            'message' => "Details have been updated!!"
        ]);
        
    }

    function deleteInfo(){

        $customerDataModel = CustomerData::find(Auth::Users()->id);

        if(!$customerDataModel){
            return response([
                'errorMessage' => true,
                'message' => "The id is not existed"
            ]);
        }
            
        $customerDataModel->delete();
            return response([
                'errorMessage' => false,
                'message' => "Deleted Successfuly!"
            ]);
    }
}
