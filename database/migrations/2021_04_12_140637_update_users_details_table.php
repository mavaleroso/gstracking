<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_details', function (Blueprint $table) {

            $table->string('gender', 60)->nullable()->after('last_name');
            $table->string('division', 60)->nullable()->after('gender');
            $table->string('section', 60)->nullable()->after('division');
            $table->string('position', 60)->nullable()->after('section');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_details', function (Blueprint $table) {
            $table->dropColumn('gender');
            $table->dropColumn('division');
            $table->dropColumn('section');
            $table->dropColumn('position');
            
        });
    }
}
