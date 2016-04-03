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
            $table->integer('MaTinh')->unsigned(); //MỚI THÊM
            $table->string('TenNTD',100);
            $table->string('DiaChi',200);
            $table->string('DienThoai',15)->nullable();
            $table->string('Email',50)->nullable();
            $table->string('Website',100)->nullable();
            $table->text('MoTa')->nullable();
            $table->string('QuyMo',30)->nullable(); //MỚI THÊM
            $table->foreign('MaNTD')->references('MaTaiKhoan')->on('TaiKhoan');
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
        Schema::drop('HoSoNTD');
    }
}
