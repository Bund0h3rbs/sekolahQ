<?php

/* =================
| Default Route Menu
 =====================*/

Route::group(['prefix' => 'matapelajaran', 'middleware' => ['auth'], 'namespace'=>'App\Http\Controllers\Management' ], function() {
    Route::get('/', ['as' => 'Mata Pelajaran', 'uses' => 'MapelController@index']);

    Route::post('/create',  ['as' => 'mapel.create', 'uses' => 'MapelController@create']);
    Route::post('/getlist', ['as' => 'mapel.getlist', 'uses' => 'MapelController@getlist']);
    Route::post('/store',   ['as' => 'mapel.store', 'uses' => 'MapelController@store']);
    Route::post('/delete',  ['as' => 'mapel.delete', 'uses' => 'MapelController@delete']);
});
