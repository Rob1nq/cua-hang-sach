<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtPhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_phieunhap', function (Blueprint $table) {
            $table->increments('MaPhieuNhap');
            $table->integer('MaSach')->unsigned();
            $table->integer('SoLuongNhap')->nullable();
            $table->integer('DonGiaNhap')->nullable();
            $table->float('ThanhTien')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_phieunhap');
        
    }
}
