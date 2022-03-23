<?php

namespace App\Http\Controllers;
use App\Models\CustomerData1;
use DB;
use Illuminate\Http\Request;

class CustomerData1Controller extends Controller
{
    function viewInfoSecond(){

        return CustomerData1::all();
    }



    function addInfoSecond(Request $req){

        $CustomerData1Model = new CustomerData1;

        $CustomerData1Model -> Owner2 = $req->Owner2;
        $CustomerData1Model -> Owner1NRIC = $req->Owner1NRIC;
        $CustomerData1Model -> Owner2NRIC = $req->Owner2NRIC;
        $CustomerData1Model -> PropAddr1 = $req->PropAddr1	;
        $CustomerData1Model -> PropAddr2 = $req->PropAddr2;
        $CustomerData1Model -> PropAddr3 = $req->PropAddr3;
        $CustomerData1Model -> PropAddr4 = $req->PropAddr4;
        $CustomerData1Model -> PropAddr5 = $req->PropAddr5;
        $CustomerData1Model -> Building = $req->Building;
        $CustomerData1Model -> BuildingID = $req->BuildingID;
        $CustomerData1Model -> RoadName = $req->RoadName;
        $CustomerData1Model -> Taman = $req->Taman;
        $CustomerData1Model -> PostCode = $req->PostCode;
        $CustomerData1Model -> Suburb = $req->Suburb;
        $CustomerData1Model -> MailName1 = $req->MailName1;
        $CustomerData1Model -> MailName2 = $req->MailName2;
        $CustomerData1Model -> MailAdd1 = $req->MailAdd1;
        $CustomerData1Model -> MailAdd2 = $req->MailAdd2;
        $CustomerData1Model -> MailAdd3 = $req->MailAdd3;
        $CustomerData1Model -> MailAdd4 = $req->MailAdd4;
        $CustomerData1Model -> Range = $req->Range;
        $CustomerData1Model -> Arrears = $req->Arrears;
        $CustomerData1Model -> CurrentBalance = $req->CurrentBalance;
        $CustomerData1Model -> BalanceAsAt27092021 = $req->BalanceAsAt27092021;
        $CustomerData1Model -> BalanceAsPerCopyBill = $req->BalanceAsPerCopyBill;
        $CustomerData1Model -> DiffBetweenBalAsPerCopyBill = $req->DiffBetweenBalAsPerCopyBill;
        $CustomerData1Model -> FirstVisitDateOfBillNotice = $req->FirstVisitDateOfBillNotice;
        $CustomerData1Model -> AgentsName = $req->AgentsName;
        $CustomerData1Model -> FUPDateOfReminderNotice = $req->FUPDateOfReminderNotice;
        $CustomerData1Model -> Occupier = $req->Occupier;
        $CustomerData1Model -> OwnernameCorrect = $req->OwnernameCorrect;
        $CustomerData1Model -> SpecifyCorrectOwnername = $req->SpecifyCorrectOwnername;
        $CustomerData1Model -> OwnersTelNo = $req->OwnersTelNo;
        $CustomerData1Model -> OwnersMobileNo = $req->OwnersMobileNo;
        $CustomerData1Model -> OwnersFaxNo = $req->OwnersFaxNo;
        $CustomerData1Model -> OwnersEmail = $req->OwnersEmail;
        $CustomerData1Model -> TenantsName = $req->TenantsName;
        $CustomerData1Model -> TenantsTelNo = $req->TenantsTelNo;
        $CustomerData1Model -> TenantsMobileNo = $req->TenantsMobileNo;
        $CustomerData1Model -> TenantsFaxNo = $req->TenantsFaxNo;
        $CustomerData1Model -> TenantsEmail = $req->TenantsEmail;
        $CustomerData1Model -> OccupierNationality = $req->OccupierNationality;
        $CustomerData1Model -> NumberOfVisitation = $req->NumberOfVisitation;
        $CustomerData1Model -> NumberOfFollowupCalls = $req->NumberOfFollowupCalls;
        $CustomerData1Model -> PropertyUsage = $req->PropertyUsage;
        $CustomerData1Model -> PropertyType = $req->PropertyType;
        $CustomerData1Model -> NameOfcompany = $req->NameOfcompany;
        $CustomerData1Model -> NatureOfBusiness = $req->NatureOfBusiness;
        $CustomerData1Model -> DRCode = $req->DRCode;
        $CustomerData1Model -> BlackArea = $req->BlackArea;
        $CustomerData1Model -> ReasonCustomerRefuseToPay = $req->ReasonCustomerRefuseToPay;
        $CustomerData1Model -> Remarks = $req->Remarks;
        $CustomerData1Model -> ThirdPartySearch = $req->ThirdPartySearch;
        $CustomerData1Model -> SourceOfTPS = $req->SourceOfTPS;
        $CustomerData1Model -> TPSContactNumber = $req->TPSContactNumber;
        $CustomerData1Model -> RemarksTPS = $req->RemarksTPS;
        $CustomerData1Model -> BATCH_NAME = $req->BATCH_NAME;
        
        
            $result  = $CustomerData1Model->save();

    }



    function updateInfoSecond(Request $req){
        
        $CustomerData1Model = CustomerData1::find(Auth::Users()->id);

        if(!$CustomerData1Model){
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

        $CustomerData1Model -> Owner2 = $req->Owner2;
        $CustomerData1Model -> Owner1NRIC = $req->Owner1NRIC;
        $CustomerData1Model -> Owner2NRIC = $req->Owner2NRIC;
        $CustomerData1Model -> PropAddr1 = $req->PropAddr1	;
        $CustomerData1Model -> PropAddr2 = $req->PropAddr2;
        $CustomerData1Model -> PropAddr3 = $req->PropAddr3;
        $CustomerData1Model -> PropAddr4 = $req->PropAddr4;
        $CustomerData1Model -> PropAddr5 = $req->PropAddr5;
        $CustomerData1Model -> Building = $req->Building;
        $CustomerData1Model -> BuildingID = $req->BuildingID;
        $CustomerData1Model -> RoadName = $req->RoadName;
        $CustomerData1Model -> Taman = $req->Taman;
        $CustomerData1Model -> PostCode = $req->PostCode;
        $CustomerData1Model -> Suburb = $req->Suburb;
        $CustomerData1Model -> MailName1 = $req->MailName1;
        $CustomerData1Model -> MailName2 = $req->MailName2;
        $CustomerData1Model -> MailAdd1 = $req->MailAdd1;
        $CustomerData1Model -> MailAdd2 = $req->MailAdd2;
        $CustomerData1Model -> MailAdd3 = $req->MailAdd3;
        $CustomerData1Model -> MailAdd4 = $req->MailAdd4;
        $CustomerData1Model -> Range = $req->Range;
        $CustomerData1Model -> Arrears = $req->Arrears;
        $CustomerData1Model -> CurrentBalance = $req->CurrentBalance;
        $CustomerData1Model -> BalanceAsAt27092021 = $req->BalanceAsAt27092021;
        $CustomerData1Model -> BalanceAsPerCopyBill = $req->BalanceAsPerCopyBill;
        $CustomerData1Model -> DiffBetweenBalAsPerCopyBill = $req->DiffBetweenBalAsPerCopyBill;
        $CustomerData1Model -> FirstVisitDateOfBillNotice = $req->FirstVisitDateOfBillNotice;
        $CustomerData1Model -> AgentsName = $req->AgentsName;
        $CustomerData1Model -> FUPDateOfReminderNotice = $req->FUPDateOfReminderNotice;
        $CustomerData1Model -> Occupier = $req->Occupier;
        $CustomerData1Model -> OwnernameCorrect = $req->OwnernameCorrect;
        $CustomerData1Model -> SpecifyCorrectOwnername = $req->SpecifyCorrectOwnername;
        $CustomerData1Model -> OwnersTelNo = $req->OwnersTelNo;
        $CustomerData1Model -> OwnersMobileNo = $req->OwnersMobileNo;
        $CustomerData1Model -> OwnersFaxNo = $req->OwnersFaxNo;
        $CustomerData1Model -> OwnersEmail = $req->OwnersEmail;
        $CustomerData1Model -> TenantsName = $req->TenantsName;
        $CustomerData1Model -> TenantsTelNo = $req->TenantsTelNo;
        $CustomerData1Model -> TenantsMobileNo = $req->TenantsMobileNo;
        $CustomerData1Model -> TenantsFaxNo = $req->TenantsFaxNo;
        $CustomerData1Model -> TenantsEmail = $req->TenantsEmail;
        $CustomerData1Model -> OccupierNationality = $req->OccupierNationality;
        $CustomerData1Model -> NumberOfVisitation = $req->NumberOfVisitation;
        $CustomerData1Model -> NumberOfFollowupCalls = $req->NumberOfFollowupCalls;
        $CustomerData1Model -> PropertyUsage = $req->PropertyUsage;
        $CustomerData1Model -> PropertyType = $req->PropertyType;
        $CustomerData1Model -> NameOfcompany = $req->NameOfcompany;
        $CustomerData1Model -> NatureOfBusiness = $req->NatureOfBusiness;
        $CustomerData1Model -> DRCode = $req->DRCode;
        $CustomerData1Model -> BlackArea = $req->BlackArea;
        $CustomerData1Model -> ReasonCustomerRefuseToPay = $req->ReasonCustomerRefuseToPay;
        $CustomerData1Model -> Remarks = $req->Remarks;
        $CustomerData1Model -> ThirdPartySearch = $req->ThirdPartySearch;
        $CustomerData1Model -> SourceOfTPS = $req->SourceOfTPS;
        $CustomerData1Model -> TPSContactNumber = $req->TPSContactNumber;
        $CustomerData1Model -> RemarksTPS = $req->RemarksTPS;
        $CustomerData1Model -> BATCH_NAME = $req->BATCH_NAME;
        
    
        
        $result  = $CustomerData1Model->save();

        return response([
            'errorMessage' => false,
            'message' => "Details have been updated!!"
        ]);
        
    }

    

    function deleteInfoSecond(){

        $CustomerData1Model = CustomerData1::find(Auth::Users()->id);

        if(!$CustomerData1Model){
            return response([
                'errorMessage' => true,
                'message' => "The id is not existed"
            ]);
        }
            
        $CustomerData1Model->delete();
            return response([
                'errorMessage' => false,
                'message' => "Deleted Successfuly!"
            ]);
    }
    
}
