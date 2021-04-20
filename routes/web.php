<?php

use Illuminate\Support\Facades\Route;

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

route::get('/','LoginController@Login');
route::get('login','LoginController@Login')->name('login');
route::post('postdangnhap','LoginController@postLogin')->name('postdangnhap');
route::group(['middleware' => 'Adminlogin'],function(){
    route::get('logout','LoginController@Logout')->name('logout');
    route::get('taikhoan','AccountController@showAccount')->name('taikhoan');
    route::post('themtaikhoan','AccountController@addAccount')->name('themtaikhoan');
    route::post('suataikhoan','AccountController@editAccount')->name('suataikhoan');
    route::post('postsuataikhoan','AccountController@postEditAccount')->name('postsuataikhoan');
    route::post('timkiemtaikhoan','AccountController@findAccount')->name('timkiemtaikhoan');
    route::post('xoataikhoan','AccountController@deleteAccount')->name('xoataikhoan');
    route::post('khoataikhoan','AccountController@blockAccount')->name('khoataikhoan');
    Route::post('paginationuser', 'AccountController@fetch')->name('paginationuser');

    route::get('khachhang','CustomerController@showCustomer')->name('khachhang');
    route::post('timkiemkhachhang','CustomerController@findCustomer')->name('timkiemkhachhang');
    route::post('themkhachhang','CustomerController@addCustomer')->name('themkhachhang');
    route::post('postsuakhachhang','CustomerController@postEditCustomer')->name('postsuakhachhang');
    Route::get('exportexcel/{type}', 'CustomerController@ExportExcel')->name('exportexcel');
    Route::post('importexcel', 'CustomerController@ImportExcel')->name('importexcel');

    route::get('sanpham','ProductController@showProduct')->name('sanpham');
    route::post('timkiemsanpham','ProductController@findProduct')->name('timkiemsanpham');
    route::get('themsanpham','ProductController@addProduct')->name('themsanpham');
    route::post('postthemsanpham','ProductController@postAddProduct')->name('postthemsanpham');
    route::get('suasanpham/{id}','ProductController@editProduct')->name('suasanpham');
    route::post('postsuasanpham','ProductController@postEditProduct')->name('postsuasanpham');
    route::post('xoasanpham','ProductController@deleteProduct')->name('xoasanpham');
});
