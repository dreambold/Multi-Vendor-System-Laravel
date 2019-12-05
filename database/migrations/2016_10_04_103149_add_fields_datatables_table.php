<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsDatatablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datatables', function (Blueprint $table) {
            $table->integer('age')->nullable();
            $table->string('job')->nullable();
            $table->string('gender')->nullable();
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
            $table->dropColumn(array('age','job','gender'));
        });
    }
}
