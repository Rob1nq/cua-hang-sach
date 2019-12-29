<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBangnhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangnhap', function (Blueprint $table) {
            $table->increments('MaSach');
            $table->integer('SoLuongNhap');
            $table->float('DonGiaNhap');
            $table->float('ThanhTien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bangnhap');
    }
}
