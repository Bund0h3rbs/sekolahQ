<?php

/* =================
| Default Route Menu
 =====================*/

Route::group(['prefix' => 'akademicKelas', 'middleware' => ['auth'], 'namespace'=>'App\Http\Controllers\Management' ], function() {
    Route::get('/', ['as' => 'Pengaturan Kelas', 'uses' => 'AkademicKelasController@index']);

    Route::post('/create',  ['as' => 'klsconfig.create', 'uses' => 'AkademicKelasController@create']);
    Route::post('/getlist', ['as' => 'klsconfig.getlist', 'uses' => 'AkademicKelasController@getlist']);
    Route::post('/store',   ['as' => 'klsconfig.store', 'uses' => 'AkademicKelasController@store']);
    Route::post('/delete',  ['as' => 'klsconfig.delete', 'uses' => 'AkademicKelasController@delete']);
});
