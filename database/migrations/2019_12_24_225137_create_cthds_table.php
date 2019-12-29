<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCthdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cthd', function (Blueprint $table) {
            $table->increments('SoHD');
            $table->integer('MaSach')->unsigned();
            $table->integer('SoLuongBan')->nullable();
            $table->float('DonGiaBan')->nullable();
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
        Schema::dropIfExists('cthd');

    }
}
