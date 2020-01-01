<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->increments('MaKH');
            $table->string('HoTenKH', 50);
            $table->string('DiaChi', 100);
            $table->char('DienThoai', 10);
            $table->string('Email', 100)->default('demo@gmail.com');

            /*$table->foreign('Email')
            ->references('Email')->on('member');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
