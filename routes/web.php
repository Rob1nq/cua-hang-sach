<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//PageController
Route::get('/index',[
'as'=> 'trangchu',
'uses'=>'PageController@get_index'
])->middleware('auth');
Route::get('/bao-cao',[
'as'=>'baocaosoluongnhap',
'uses'=>'AdminBaoCao@get_baocao'
])->middleware('auth');

Route::get('bao-cao-so-luong-ban',['as'=>'get_BaoCaosoluongban',
'uses'=>'AdminBaoCao@get_BaoCaosoluongban'])->middleware('auth');;
Route::post('bc-so-luong-ban',['as'=>'post_BaoCaosoluongban',
'uses'=>'AdminBaoCao@post_BaoCaosoluongban'])->middleware('auth');;


///

Route::post('/bao-cao-ton',[
'as'=>'baocaoton',
'uses'=>'AdminBaoCao@post_baocao'
])->middleware('auth');


Route::get('tai-khoan',[
'as'=>'Taikhoan',
'uses'=>'PageController@get_taikhoan'])->middleware('auth');
Route::get('/homepage',[
'as'=>"homepage",
'uses'=>'PageController@get_home']);
Route::get('/shop',[
'as'=>'shop',
'uses'=>'PageController@get_shop']);
Route::get('/chi-tiet-sach/{id}',[
'as'=>'ctsach',
'uses'=>'PageController@get_ctsach']);
//PageController

//AdminNXB
Route::get('/xoanxb/{id}',[
'as'=>'xoanxb',
'uses'=>'AdminNXB@get_xoanxb'])->middleware('auth');
Route::get('/cap-nhat-nxb/{id}',[
'as'=>'capnhatnxb',
'uses'=>'AdminNXB@get_capnhatnxb'])->middleware('auth');
Route::get('NXB',[
'as'=>'NXB',
'uses'=>'AdminNXB@get_NXB'])->middleware('auth');
Route::post('NXB',[
'as'=>'nxb',
'uses'=>'AdminNXB@post_nxb'])->middleware('auth');;
Route::post('cap-nhat-NXB',[
'as'=>'CapNhatNXB',
'uses'=>'AdminNXB@post_capnhatnxb'])->middleware('auth');;
//AdminNXB

 
//AdminSach
Route::get('/ql-sach',[
'as'=>'qlsach',
'uses'=>'AdminSach@get_qlsach',
])->middleware('auth');
Route::post('/ql-sach',[
'as'=>'sach',
'uses'=>'AdminSach@post_qlsach'])->middleware('auth');;
Route::post('Cap-nhat-sach',[
'as'=>'_capnhatsach',
'uses'=>'AdminSach@post_capnhatsach'])->middleware('auth');;


//AdminPhieuNhap

Route::get('/chi-tiet-phieu-nhap/{id}',[
'as'=>'ct_phieunhap',
'uses'=>'AdminPhieuNhap@get_ctpn'])->middleware('auth');
 Route::get('phieu-nhap',[
 	'as'=>'phieunhap',
 	'uses'=>'AdminPhieuNhap@get_phieunhap'])->middleware('auth');
 Route::get('danh-sach-phieu-nhap',[
'as'=>'getdanhsachphieunhap',
'uses'=>'AdminPhieuNhap@get_danhsachphieunhap'])->middleware('auth');
 Route::post('/phieu-nhap',[
'as'=>'phieu-nhap',
'uses'=>'AdminPhieuNhap@post_phieunhap'])->middleware('auth');;
 Route::post('/chi-tiet-phieu-nhap',[
'as'=>'chitietphieunhap',
'uses'=>'AdminPhieuNhap@post_ctpn'])->middleware('auth');
 Route::get('danh-sach-pn',['as'=>'danhsachpn','uses'=>'AdminPhieuNhap@danhsachpn']);
 
 Route::get('xoa-ct-pn/{id}',['as'=>'xoactpn','uses'=>'AdminPhieuNhap@xoactpn']);
 //AdminPhieuNhap





//AdminKhachHang
Route::get('/khach-hang',[
'as'=>'khachhang',
'uses'=>'AdminKhachHang@get_khachhang'
])->middleware('auth');
Route::get('lien-he',[
'as'=>'lienhe',
'uses'=>'AdminKhachHang@get_lienhe']);
Route::get('tai-khoan',[
'as'=>'taikhoan',
'uses'=>'AdminKhachHang@get_taikhoankh']);
Route::get('chi-tiet-kh/{id}',['as'=>'get_ctkh',
'uses'=>'AdminKhachHang@get_ctkh']);
Route::post('capnhatkh',['as'=>'postCannhatKH',
'uses'=>'AdminKhachHang@postCannhatKH']);
//AdminKhachHang



//AdminDoanhThu
Route::get('/doanh-thu',[
'as'=>'doanhthu',
'uses'=>'AdminDoanhThu@get_doanhthu'
])->middleware('auth');

Route::post('/doanh-thu-thang',[
'as'=>'post_Doanhthu',
'uses'=>'AdminDoanhThu@post_Doanhthu'
]);
//  Route::get('get-pdf',['as'=>'getPDF',
// 'uses'=>'PageController@getPDF']);

//AdminDoanhThu



//AdminHoaDon

Route::get('hoa-don',[
'as'=>'hoadon',
'uses'=>'AdminHoaDon@get_hoadon'
])->middleware('auth');

Route::get('cthd/{id}',[
'as'=>'cthd',
'uses'=>'AdminHoaDon@get_cthd'])->middleware('auth');	
//AdminHoaDon




//BanHangGioHang
Route::get('gio-hang',[
'as'=>'giohang',
'uses'=>'BanHangGioHang@get_giohang'
]);
Route::get('them-gio-hang/{id}',['as'=>'themgiohang',
'uses'=>'BanHangGioHang@get_themgiohang']);
Route::get('xoa-gio-hang/{id}',[
'as'=>'xoagiohang',
'uses'=>'BanHangGioHang@xoa_giohang']);
Route::post('cap-nhat-gio-hang',[
'as'=>'capnhatgiohang',
'uses'=>'BanHangGioHang@capnhat_giohang']);
Route::post('addcard',['as'=>'addcart',
'uses'=>'BanHangGioHang@postAddCart']);
//BanHangGioHang


//BanHangDatHang
Route::get('thanh-toan',[
'as'=>'thanhtoan',
'uses'=>'BanHangDatHang@get_thanhtoan']);
//BanHangDatHang

//AdminTheLoai
Route::get('the-loai',[
'as'=>'theloai',
'uses'=>'AdminTheLoai@get_theloai'])->middleware('auth');
Route::post('the-loai',[
'as'=>'posttheloai',
'uses'=>'AdminTheLoai@post_theloai'])->middleware('auth');;
Route::get('xoa-the-loai/{id}',['as'=>'xoatheloai',
'uses'=>'AdminTheLoai@get_xoatheloai'])->middleware('auth');;
Route::get('cap-nhap-the-loai/{id}',[
'as'=>'capnhattheloai',
'uses'=>'AdminTheLoai@get_capnhattheloai'])->middleware('auth');
Route::post('cap-nhat-the-loai',[
'as'=>'postcapnhattheloai',
'uses'=>'AdminTheLoai@post_capnhattheloai'])->middleware('auth');;
//AdminTheLoai


//AdminTacGia
Route::get('tac-gia',[
'as'=>'tacgia',
'uses'=>'AdminTacGia@get_tacgia'])->middleware('auth');
Route::post('tac-gia',['as'=>'posttacgia',
'uses'=>'AdminTacGia@post_tacgia']);
Route::get('xoa-tac-gia/{id}',
['as'=>'xoatacgia',
'uses'=>'AdminTacGia@get_xoatacgia'])->middleware('auth');
Route::post('Cap-nhat-tac-gia',['as'=>'postcapnhattacgia',
'uses'=>'AdminTacGia@post_capnhattacgia']);
Route::get('cap-nhat-tac-gia/{id}',[
'as'=>'capnhattacgia',
'uses'=>'AdminTacGia@get_capnhattacgia'])->middleware('auth');
//AdminTacGia



//AdminDauSach
Route::get('dau-sach',[
'as'=>'dausach',
'uses'=>'AdminDauSach@get_dausach'])->middleware('auth');

Route::get('cap-nhat-dau-sach/{id}',[
'as'=>'getcapnhatdausach',
'uses'=>'AdminDauSach@get_capnhatdausach'])->middleware('auth');
Route::post('dau-sach',[
'as'=>'post_dausach',
'uses'=>'AdminDauSach@post_dausach'])->middleware('auth');;
Route::post('cap-nhat-dau-sach',[
'as'=>'postcapnhatdausach',
'uses'=>'AdminDauSach@post_capnhatdausach'])->middleware('auth');
Route::get('xoa-dau-sach/{id}',['as'=>'xoadausach','uses'=>'AdminDauSach@xoadausach']);

//AdminDauSach



//BanHangTimKiem
Route::get('tim-kiem',['as'=>'timkiemsach',
'uses'=>'BanHangTimKiem@get_timkiemsach']);
Route::get('thieu-nhi',[
'as'=>'thieunhi',
'uses'=>'BanHangTimKiem@thieunhi']);
Route::get('giao-trinh',[
'as'=>'giaotrinh',
'uses'=>'BanHangTimKiem@giaotrinh']);
Route::get('tieu-thuyet',[
'as'=>'tieuthuyet',
'uses'=>'BanHangTimKiem@tieuthuyet']);
Route::get('van-hoc',[
'as'=>'vanhoc',
'uses'=>'BanHangTimKiem@vanhoc']);
Route::get('truyen-ngan',[
'as'=>'truyenngan',
'uses'=>'BanHangTimKiem@truyenngan']);
Route::get('sach-tu-luc',[
'as'=>'sachtuluc',
'uses'=>'BanHangTimKiem@sachtuluc']);
Route::get('khoa-hoc',[
'as'=>'khoahoc',
'uses'=>'BanHangTimKiem@khoahoc']);
Route::get('tim-kiem-gia',['as'=>'timkiemgia',
'uses'=>'BanHangTimKiem@get_timkiemgia']);

//BanHangTimKiem



//BanHangDatHang
Route::get('dat-hang',[
'as'=>'dathang',
'uses'=>'BanHangDatHang@get_dathang']);


// user

Route::get('add',['as'=>'getAddUser',
'uses'=>'UserController@getAddUser'])->middleware('auth');
Route::post('add',['as'=>'postAddUser',
'uses'=>'UserController@postAddUser']);
Route::get('delete',['as'=>'getDeleteUser',
'uses'=>'UserController@getDeleteUser'])->middleware('auth');
Route::get('list',['as'=>'getList',
	'uses'=>'UserController@getList'])->middleware('auth');
Route::get('detail-User',[
'as'=>'getUser',
'uses'=>'UserController@getUser'])->middleware('auth');
Route::get('delete/{id}',[
'as'=>'getDelete','uses'=>'UserController@getDelete'])->middleware('auth');
Route::get('update/{id}',[
'as'=>'getUpdate','uses'=>'UserController@getUpdate'])->middleware('auth');
Route::post('postupdate',['as'=>'postUpdateUser','uses'=>'UserController@postUpdateUser']);
Route::get('Sign-up-shop',
['as'=>'Signup','uses'=>'UserController@getSignup']);
Route::post('Post-sign-up',['as'=>'PostSignUp','uses'=>'UserController@PostSignUp']);
Route::get('cap-nhat-kh/{id}',['as'=>'getTK',
'uses'=>'UserController@getTK']);
Route::post('cap-nhat-kh',['as'=>'postTK',
'uses'=>'UserController@postTK']);
Route::get('thongbao',['as'=>"getThongBao",
'uses'=>'UserController@getThongBao']);
Route::get('xoa-thong-bao/{id}',['as'=>'getXoaThongbao',
	'uses'=>'UserController@getXoaThongbao']);
Route::get('Admin-Thong-Bao',['as'=>'AdminThongBao',
'uses'=>'UserController@AdminThongBao'])->middleware('auth');

Route::get('Xoa-Admin-Thong-Bao/{id}',['as'=>'AdminXoaThongBao',
'uses'=>'UserController@AdminXoaThongBao'])->middleware('auth');

Route::post('contact',['as'=>'contact','uses'=>'UserController@postContact']);
Route::post('dang-ki-thong-tin',['as'=>'dangkithongtin',
	'uses'=>'UserController@dangkithongtin']);


//user

//Login
Route::get('Admin/Login',['as'=>'AdminLogin',
	'uses'=>'Auth\LoginController@getLogin']);
Route::post('Admin/login',['as'=>'postAdminLogin',
	'uses'=>'Auth\LoginController@postLogin']);//
Route::get('Admin/logout',['as'=>'getLogout',
'uses'=>'Auth\LoginController@getLogout']);

Route::post('Shop-Login',['as'=>'postAdminLoginShop',
	'uses'=>'Auth\LoginController@postAdminLoginShop']);

Route::get('logout',['as'=>'LogoutShop','uses'=>'Auth\LoginController@LogoutShop']);
//Login

//PDFController
Route::get('hoa-don-pdf',['as'=>'HoaDon_PDF',
'uses'=>'PDFController@HoaDon_PDF']);
Route::get('ct-hoa-don-pdf/{id}',['as'=>'CT_HoaDon_PDF',
'uses'=>'PDFController@CT_HoaDon_PDF']);
Route::get('phieu-nhap-pdf',['as'=>'PhieuNhap_PDF',
'uses'=>'PDFController@PhieuNhap_PDF']);
Route::get('ct-phieu-nhap-pdf/{id}',['as'=>'CT_PhieuNhap_PDF',
'uses'=>'PDFController@CT_PhieuNhap_PDF']);
Route::get('doanh-thu-pdf/{id}',['as'=>'DoanhThu_PDF',
'uses'=>'PDFController@DoanhThu_PDF']);
Route::get('so-luong-nhap-pdf/{id}',['as'=>'SoLuongNhap_PDF',
'uses'=>'PDFController@SoLuongNhap_PDF']);
Route::get('don-hang',['as'=>'donhang','uses'=>'PageController@donhang']);












