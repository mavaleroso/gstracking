<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelCharges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_charges', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->bigInteger('drivers_id');
            $table->bigInteger('vehicles_id');
            $table->bigInteger('procurements_id');
            $table->date('request_date');
            $table->mediumText('particulars');
            $table->double('num_liters');
            $table->double('unit_price');
            $table->double('amount');
            $table->mediumText('purpose');
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('fuel_charges');
    }
}
