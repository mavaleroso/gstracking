<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->mediumText('purpose');
            $table->double('gasoline_liters');
            $table->double('diesel_liters');
            $table->double('unit_price');
            $table->double('amount');
            $table->smallInteger('status')->default(0);
            $table->timestamps();
            $table->SoftDeletes();
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
