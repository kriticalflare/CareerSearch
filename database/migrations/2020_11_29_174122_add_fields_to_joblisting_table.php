<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToJoblistingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('joblistings', function (Blueprint $table) {
            $table->date('start_date');
            $table->date('apply_by');
            $table->string('duration');
            $table->string('company_logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('joblistings', function (Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('apply_by');
            $table->dropColumn('duration');
            $table->dropColumn('company_logo');
        });
    }
}
