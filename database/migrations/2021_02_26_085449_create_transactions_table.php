<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id')->default(0);
            $table->unsignedBigInteger('vehicle_id')->default(0);
            $table->unsignedBigInteger('procurement_id')->default('');
            $table->string('trip_ticket')->default('');
            $table->bigInteger('starting_odo')->default(0);
            $table->bigInteger('ending_odo')->default(0);
            $table->date('date_submit_proc')->default('');
            $table->integer('travelled')->default(0);
            $table->double('rate_per_km')->default(0);
            $table->double('flat_rate')->default(0);
            $table->double('rate_per_night')->default(0);
            $table->integer('nights_count')->default(0);
            $table->double('total_cost')->default(0);
            $table->mediumText('remarks')->default('');
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
        Schema::dropIfExists('transactions');
    }
}
