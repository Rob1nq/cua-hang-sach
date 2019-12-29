<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('password',60);
            $table->string('email');
            $table->tinyInteger('level');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('MaKH')->unsigned();

            $table->foreign('MaKH')
            ->references('MaKH')->on('khachhang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member', function(Blueprint $table) {
            $table->dropForeign(['MaKH']);
        });
        Schema::dropIfExists('member');
    }
}
