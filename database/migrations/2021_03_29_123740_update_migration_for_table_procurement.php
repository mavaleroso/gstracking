<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMigrationForTableProcurement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('procurements', function (Blueprint $table) {
            $table->string('status', 50)->nullable();
            $table->SoftDeletes()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('procurements', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
