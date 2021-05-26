<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->text('image')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('plate_no')->nullable();
            $table->integer('capacity')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
