<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname', 60)->nullable()->after('password');
            $table->string('lastname', 60)->nullable()->after('firstname');
            $table->string('gender', 60)->nullable()->after('lastname');
            $table->string('division', 60)->nullable()->after('gender');
            $table->string('section', 60)->nullable()->after('division');
            $table->string('status', 60)->nullable()->after('section');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('gender');
            $table->dropColumn('division');
            $table->dropColumn('section');
            $table->dropColumn('status');
            //
        });
    }
}
