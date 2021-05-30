<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->bigInteger('transaction_id');
            $table->bigInteger('vehicle_id');
            $table->bigInteger('driver_id');
            $table->bigInteger('starting_odo')->nullable();
            $table->bigInteger('ending_odo')->nullable();
            $table->integer('travelled')->default(0);
            $table->double('rate_per_km')->nullable();
            $table->double('flat_rate')->nullable();
            $table->double('rate_per_night')->default(0);
            $table->integer('nights_count')->default(0);
            $table->double('total_cost')->nullable();
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
        Schema::dropIfExists('transaction_vehicles');
    }
}
