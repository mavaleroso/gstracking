<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RequestTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('serial_code')->nullable();
            $table->integer('mot')->nullable();
            $table->bigInteger('group')->nullable();
            $table->bigInteger('request_id')->nullable();
            $table->mediumText('remarks')->nullable();
            $table->bigInteger('transaction_vehicles_id')->nullable();
            $table->bigInteger('user_id')->nullable();
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
        Schema::dropIfExists('request_transactions');
    }
}
