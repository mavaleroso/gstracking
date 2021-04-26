<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default('');
            $table->string('serial_code')->default('');
            $table->string('type_vehicle')->default('');
            $table->string('department')->default('');
            $table->string('purpose')->default('');
            $table->date('travel_date')->default('');
            $table->time('depart_time')->default('');
            $table->smallInteger('is_status')->default(1);
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
        Schema::dropIfExists('requests');
    }
}
