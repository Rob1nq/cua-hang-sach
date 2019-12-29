<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->increments('MaSach');
            $table->integer('MaDauSach')->unsigned();
            $table->integer('MaNXB')->unsigned();
            $table->year('NamXB');
            $table->date('NgayRaMat');
            $table->integer('SoLuongTon');
            $table->float('DonGia');
            $table->text('MoTa');
            $table->text('HinhAnh');
            $table->float('DonGiaSale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sach');
        
    }
}
