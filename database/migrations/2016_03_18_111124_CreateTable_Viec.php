<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableViec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Viec',function($table){
            $table->integer('MaNganh')->unsigned();
            $table->integer('MaNTD')->unsigned();
            $table->increments('MaViec');
            $table->string('TenViec',100);
            $table->integer('MaMucLuong')->unsigned();
            $table->integer('SoLuong');
            $table->integer('GioiTinh');
            $table->integer('MaTrinhDo')->unsigned();
            $table->integer('MaKinhNghiem')->unsigned();
            $table->integer('MaTinh')->unsigned();
            $table->date('Han');
            $table->integer('MaHinhThuc')->unsigned();
            $table->text('MoTa')->nullable();
            $table->text('YeuCau')->nullable();
            $table->text('QuyenLoi')->nullable();

            $table->foreign('MaNganh')->references('MaNganh')->on('Nganh');
            $table->foreign('MaNTD')->references('MaNTD')->on('HoSoNTD');
            $table->foreign('MaMucLuong')->references('MaMucLuong')->on('MucLuong');
            $table->foreign('MaTrinhDo')->references('MaTrinhDo')->on('TrinhDo');
            $table->foreign('MaKinhNghiem')->references('MaKinhNghiem')->on('KinhNghiem');
            $table->foreign('MaTinh')->references('MaTinh')->on('Tinh');
            $table->foreign('MaHinhThuc')->references('MaHinhThuc')->on('HinhThuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Viec');
    }
}
