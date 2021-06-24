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
            $table->string('trip_ticket')->nullable();
            $table->string('type');
            $table->bigInteger('vehicle_id');
            $table->bigInteger('driver_id');
            $table->unsignedBigInteger('procurement_id')->nullable();
            $table->bigInteger('starting_odo')->nullable();
            $table->bigInteger('ending_odo')->nullable();
            $table->integer('travelled')->default(0);
            $table->double('rate_per_km')->default(0);
            $table->double('flat_rate')->default(0);
            $table->double('rate_per_night')->default(0);
            $table->integer('nights_count')->default(0);
            $table->double('total_cost')->nullable();
            $table->date('date_submit_proc')->nullable();
            $table->mediumText('remarks')->nullable();
            $table->smallInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
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
