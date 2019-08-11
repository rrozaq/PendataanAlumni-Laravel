<?php

// Frontend routes
Route::get('/', 'FrontController@home');
Route::get('pencarian', 'FrontController@pencarian');
Route::get('profile/{npm}', 'FrontController@show')->name('profile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dashboard routes
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dash.home');
    // read alumni
    Route::get('alumni', 'Admin\AlumniController@index')->name('dash.alumni');
    Route::get('jsonalumni', 'Admin\AlumniController@alumni')->name('dash.getalumni');
    // tambah alumni
    Route::get('alumni/tambah', 'Admin\AlumniController@tambahAlumni')->name('dash.alumni.create');
    Route::post('alumni', 'Admin\AlumniController@store');
    // edit alumni
    Route::get('alumni/edit/{id}', 'Admin\AlumniController@edit')->name('dash.alumni.edit');
    Route::put('alumni/edit/{id}', 'Admin\AlumniController@update')->name('alumni.update');
    // delete alumni
    Route::delete('alumni/delete/{id}', 'Admin\AlumniController@destroy')->name('dash.alumni.delete');

    // Statistik
    Route::get('alumni/tahun', 'Admin\StatistikController@tahun')->name('dash.statistik.tahun');
    Route::get('alumni/prodi', 'Admin\StatistikController@prodi')->name('dash.statistik.prodi');
    Route::get('alumni/jk', 'Admin\StatistikController@jk')->name('dash.statistik.jk');

    // Laporan Alumni
    Route::get('alumni/laporan/cetak', 'Laporan\LaporanController@cetakPdf')->name('cetak.laporan.alumni');
});

    // Login User
    Route::post('loginuser', 'UserController@loginUser')->name('loginuser');
    Route::get('keluar', 'UserController@keluar');

    // lainnya
    Route::get('kab/{id}', 'DashboardController@kab')->name('kab');