<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CunstomerData1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CustomerDatas1', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('CustomerDataID');
            $table->foreign('CustomerDataID')->references('id')->on('CustomerDatas');
            $table->string('Owner2');
            $table->string('Owner1NRIC');
            $table->string('Owner2NRIC');
            $table->string('PropAddr1');
            $table->string('PropAddr2');
            $table->string('PropAddr3');
            $table->string('PropAddr4');
            $table->string('PropAddr5');
            $table->string('Building');
            $table->string('BuildingID');
            $table->string('RoadName');
            $table->string('Taman');
            $table->string('PostCode');
            $table->string('Suburb');
            $table->string('MailName1');
            $table->string('MailName2');
            $table->string('MailAdd1');
            $table->string('MailAdd2');
            $table->string('MailAdd3');
            $table->string('MailAdd4');
            $table->string('Range');
            $table->string('Arrears');
            $table->string('CurrentBalance');
            $table->string('BalanceAsAt27092021');
            $table->string('BalanceAsPerCopyBill');
            $table->string('DiffBetweenBalAsPerCopyBill');
            $table->string('FirstVisitDateOfBillNotice');
            $table->string('AgentsName');
            $table->string('FUPDateOfReminderNotice');
            $table->string('Occupier');
            $table->string('OwnernameCorrect');
            $table->string('SpecifyCorrectOwnername');
            $table->string('OwnersTelNo');
            $table->string('OwnersMobileNo');
            $table->string('OwnersFaxNo');
            $table->string('OwnersEmail');
            $table->string('TenantsName');
            $table->string('TenantsTelNo');
            $table->string('TenantsMobileNo');
            $table->string('TenantsFaxNo');
            $table->string('TenantsEmail');
            $table->string('OccupierNationality');
            $table->string('NumberOfVisitation');
            $table->string('NumberOfFollowupCalls');
            $table->string('PropertyUsage');
            $table->string('PropertyType');
            $table->string('NameOfcompany');
            $table->string('NatureOfBusiness');
            $table->string('DRCode');
            $table->string('BlackArea');
            $table->string('ReasonCustomerRefuseToPay');
            $table->string('Remarks');
            $table->string('ThirdPartySearch');
            $table->string('SourceOfTPS');
            $table->string('TPSContactNumber');
            $table->string('RemarksTPS');
            $table->string('BATCH_NAME');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CustomerDatas1');
    }
}
