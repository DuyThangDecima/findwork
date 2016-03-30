<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKinhNghiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KinhNghiem', function(Blueprint $table){
            $table->increments('MaKinhNghiem');
            $table->integer('MucDuoi');
            $table->integer('MucTren');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('KinhNghiem');
    }
}
