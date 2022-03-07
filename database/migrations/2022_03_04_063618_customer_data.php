<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CustomerDatas', function (Blueprint $table) {
            $table->id();
            
            $table->string('Exclude');
            $table->string('IWKsSpecialInstruction');
            $table->string('DCAFileType');
            $table->string('DCAName');
            $table->string('DCACode');
            $table->string('State');
            $table->string('CostCode');
            $table->string('UO');
            $table->string('LAName');
            $table->string('BillNo');
            $table->string('SAN');
            $table->string('CustomersTelephoneNo');
            $table->string('CustomersMobileNo');
            $table->string('CustomersFaxNo');
            $table->string('CustomersEmail');
            $table->string('Owner1');

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
        Schema::dropIfExists('CustomerDatas');
    }
}
