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
            $table->unsignedBigInteger('request_id')->nullable();
            $table->unsignedBigInteger('procurement_id')->nullable();
            $table->unsignedBigInteger('office_id')->nullable();
            $table->unsignedBigInteger('rental_id')->nullable();
            $table->string('trip_ticket')->nullable();
            $table->bigInteger('starting_odo')->nullable();
            $table->bigInteger('ending_odo')->nullable();
            $table->date('date_submit_proc')->nullable();
            $table->integer('travelled')->default(0);
            $table->double('rate_per_km')->nullable();
            $table->double('flat_rate')->nullable();
            $table->double('rate_per_night')->default(0);
            $table->integer('nights_count')->default(0);
            $table->double('total_cost')->nullable();
            $table->mediumText('remarks')->nullable();
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
