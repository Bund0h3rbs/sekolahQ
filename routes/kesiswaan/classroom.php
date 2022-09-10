<?php

/* =================
| Default Route Menu
 =====================*/

Route::group(['prefix' => 'classroom', 'middleware' => ['auth'], 'namespace'=>'App\Http\Controllers\Kesiswaan' ], function() {
    Route::get('/', ['as' => 'Management Kelas', 'uses' => 'ManagementKelasController@index']);

    Route::post('/create',  ['as' => 'klsconfig.create', 'uses' => 'ManagementKelasController@create']);
    Route::post('/getlist', ['as' => 'klsconfig.getlist', 'uses' => 'ManagementKelasController@getlist']);
    Route::post('/store',   ['as' => 'klsconfig.store', 'uses' => 'ManagementKelasController@store']);
    Route::post('/delete',  ['as' => 'klsconfig.delete', 'uses' => 'ManagementKelasController@delete']);
});
