<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baocaoton', function (Blueprint $table) {
            $table->foreign('MaSach')
            ->references('MaSach')->on('sach');
        });
        Schema::table('cthd', function (Blueprint $table) {
            
            $table->foreign('SoHD')
            ->references('SoHD')->on('hoadon');

            $table->foreign('MaSach')
            ->references('MaSach')->on('sach');
        });
        Schema::table('ct_phieunhap', function (Blueprint $table) {
            
            $table->foreign('MaPhieuNhap')
            ->references('MaPhieuNhap')->on('phieunhap');
            
            $table->foreign('MaSach')
            ->references('MaSach')->on('sach');
        });
        Schema::table('ct_tacgia', function (Blueprint $table) {
            
            $table->foreign('MaDauSach')
            ->references('MaDauSach')->on('dausach');
            
            $table->foreign('MaTacGia')
            ->references('MaTacGia')->on('tacgia');
        });
        Schema::table('dausach', function (Blueprint $table) {
            
            $table->foreign('MaTheLoai')
            ->references('MaTheLoai')->on('theloai');
        });
        Schema::table('hoadon', function (Blueprint $table) {
            
            $table->foreign('MaKH')
            ->references('MaKH')->on('khachhang');
        });
        Schema::table('phanquyen', function (Blueprint $table) {
            
            $table->foreign('MaNhom')
            ->references('MaNhom')->on('nhomnguoidung');
            
            $table->foreign('MaChucNang')
            ->references('MaChucNang')->on('chucnang');
        });
        Schema::table('sach', function(Blueprint $table) {
            
            $table->foreign('MaDauSach')
            ->references('MaDauSach')->on('dausach');
            
            $table->foreign('MaNXB')
            ->references('MaNXB')->on('nhaxuatban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baocaoton', function (Blueprint $table) {
            $table->dropForeign(['MaSach']);
        });
        Schema::table('cthd', function (Blueprint $table) {
            
            $table->dropForeign(['SoHD', 'MaSach']);
        });
        Schema::table('ct_phieunhap', function (Blueprint $table) {
            
            $table->dropForeign(['MaPhieuNhap', 'MaSach']);
        });
        Schema::table('ct_tacgia', function (Blueprint $table) {
            
            $table->dropForeign(['MaDauSach', 'MaTacGia']);
        });
        Schema::table('dausach', function (Blueprint $table) {
            
            $table->dropForeign(['MaTheLoai', 'MaDauSach']);
        });
        Schema::table('hoadon', function (Blueprint $table) {
            
            $table->dropForeign(['MaKH', 'SoHD']);
        });
        Schema::table('phanquyen', function (Blueprint $table) {
            
            $table->dropForeign(['MaNhom', 'MaChucNang']);
        });
        Schema::table('sach', function(Blueprint $table) {
            
            $table->dropForeign(['MaDauSach', 'MaNXB', 'MaSach']);
        });
        Schema::table('phieunhap', function(Blueprint $table) {
            $table->dropForeign(['MaPhieuNhap']);
        });
        Schema::table('tacgia', function(Blueprint $table) {
            $table->dropForeign(['MaTacGia']);
        });
        Schema::table('nhomnguoidung', function(Blueprint $table) {
            $table->dropForeign(['MaNhom']);
        });
        Schema::table('chucnang', function(Blueprint $table) {
            $table->dropForeign(['MaChucNang']);
        });
        Schema::table('nhaxuatban', function(Blueprint $table) {
            $table->dropForeign(['MaNXB']);
        });
        Schema::table('khachhang', function(Blueprint $table) {
            $table->dropForeign(['MaKH']);
        });
    }
}
