<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHoSoNTV extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoSoNTV', function($table){
            $table->integer('MaNTV')->unsigned()->primary();
            $table->string('TenNTV');
            $table->date('NgaySinh');
            $table->string('DiaChi',50);
            $table->integer('DienThoai')->nullable();
            $table->string('Email',50)->nullable();
            $table->integer('GioiTinh');
            $table->foreign('MaNTV')->references('MaTaiKhoan')->on('TaiKhoan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('HoSoNTV');
    }
}
