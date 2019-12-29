<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaocaotonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaoton', function (Blueprint $table) {
            $table->dateTime('ThoiGian');
            $table->increments('MaSach');
            $table->integer('TonDau')->nullable();
            $table->integer('PhatSinh')->nullable();
            $table->integer('TonCuoi')->nullable();       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baocaoton');
    }
}
