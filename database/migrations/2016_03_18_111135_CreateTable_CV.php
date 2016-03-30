<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCV extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CV', function($table){
            $table->integer('MaNTV')->unsigned();
            $table->integer('MaNganh')->unsigned();
            $table->increments('MaCV');
            $table->string('TenCV',50);
            $table->integer('MaTrinhDo')->unsigned();
            $table->integer('MaKinhNghiem')->unsigned();
            $table->integer('MaHinhThuc')->unsigned();
            $table->integer('MaTinh')->unsigned();
            $table->text('MoTa')->nullable();

            $table->foreign('MaNTV')->references('MaNTV')->on('HoSoNTV');
            $table->foreign('MaNganh')->references('MaNganh')->on('Nganh');
            $table->foreign('MaTrinhDo')->references('MaTrinhDo')->on('TrinhDo');
            $table->foreign('MaKinhNghiem')->references('MaKinhNghiem')->on('KinhNghiem');
            $table->foreign('MaHinhThuc')->references('MaHinhThuc')->on('HinhThuc');
            $table->foreign('MaTinh')->references('MaTinh')->on('Tinh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('CV');
    }
}
