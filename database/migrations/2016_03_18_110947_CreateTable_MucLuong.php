<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMucLuong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MucLuong', function(Blueprint $table){
            $table->increments('MaMucLuong');
            $table->integer('NguongDuoi');
            $table->integer('NguongTren');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MucLuong');
    }
}
