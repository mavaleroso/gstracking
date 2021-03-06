<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_provinces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->bigInteger('psgc_province')->nullable();
            $table->string('province_code')->nullable();
            $table->string('province_name')->nullable();
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
        Schema::dropIfExists('provinces');
    }
}
