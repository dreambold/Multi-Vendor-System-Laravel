<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datatables', function (Blueprint $table) {
            $table->string('country')->nullable();
            $table->string('sale_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datatables', function(Blueprint $table)
        {
            // delete above columns
            $table->dropColumn(array('country'));
        });
    }
}
