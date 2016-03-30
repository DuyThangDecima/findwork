<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHoSoNTD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoSoNTD', function($table){
            $table->integer('MaNTD')->unsigned()->primary();
            $table->string('TenNTD',50);
            $table->string('DiaChi',100);
            $table->string('DienThoai')->nullable();
            $table->string('Email',50)->nullable();
            $table->string('Website',100)->nullable();
            $table->string('MoTa')->nullable();
            $table->foreign('MaNTD')->references('MaTaiKhoan')->on('TaiKhoan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('HoSoNTD');
    }
}
