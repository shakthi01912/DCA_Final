<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DomesticOnly extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Domestics', function (Blueprint $table) {
            $table->id();
            $table->string('Bill');
            $table->string('san');
            $table->string('Owner1');
            $table->string('Add1To4');
            $table->string('Range');
            $table->string('Arrears');
            $table->string('TotalPaymentAmount');
            $table->string('TakePhoto');
            $table->string('Occupier');
            $table->string('OwenersName');
            $table->string('CorrectOwnersName');
            $table->string('OwnersTelNo');
            $table->string('TenantsName');
            $table->string('TenantsTelNo');
            $table->string('Nationality');
            $table->string('PropertyUsage');
            $table->string('PropertyType');
            $table->string('DRCode');
            $table->string('Remarks');
            $table->string('DR05');
            $table->string('WatermeterNumber');
         
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
        Schema::dropIfExists('Domestics');
    }
}
