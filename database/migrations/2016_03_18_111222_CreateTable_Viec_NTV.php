<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableViecNTV extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Viec_NTV', function($table){
            $table->integer('MaViec')->unsigned();
            $table->integer('MaCV')->unsigned();
            $table->integer('LuaChon');
            $table->primary(array('MaViec','MaCV'));

            $table->foreign('MaViec')->references('MaViec')->on('Viec');
            $table->foreign('MaCV')->references('MaCV')->on('CV');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Viec_NTV');
    }
}
