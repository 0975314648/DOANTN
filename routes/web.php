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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Admin'],function(){
    Route::group(['prefix'=>'login'],function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });
    Route::group(['prefix'=>'quantrihethong'],function(){
        Route::get('/','quantriHTController@getDefault');
        Route::get('user','quantriHTController@getQTUser');
        Route::get('sinhvien','quantriHTController@getSinhvien');
        Route::get('giangvien','quantriHTController@getGiangvien');
        Route::get('tkb','quantriHTController@getTKB');
        Route::get('lop','quantriHTController@getLop');
        Route::get('monhoc','quantriHTController@getMonhoc');
    });
    Route::get('logout','LoginController@getLogout');
});

//Route::get('quantrihethong', function () {
    //return view('layout_quantri.index');
//});

Route::get('sinhvien', function () {
    return view('sinhvien.default');
});



Route::get('sinhvien/diem-danh','Sinhvien\SinhvienController@getDiemdanh');

Route::get('sinhvien/thoi-khoa-bieu','Sinhvien\SinhvienController@thoikhoabieu');

Route::get('sinhvien/lich-thi','Sinhvien\SinhvienController@lichthi');

Route::group(['prefix'=>'giangvien'],function(){
    //GET
    Route::get('/','Giangvien\defaultController@getIndex');
    Route::get('tracuu','Giangvien\defaultController@getTracuu');
    Route::get('tracuu/chitiet','Giangvien\defaultController@getChitietTracuu');
    Route::get('diemdanh','Giangvien\defaultController@getDiemdanh');
    Route::get('lichday','Giangvien\defaultController@getLichday');

    //POST
    
    Route::get('test','Giangvien\defaultController@getTest');

    
});
Route::get('sinhvien/test','Sinhvien\SinhvienController@getTest');