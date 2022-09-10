<?php

/* =================
| Default Route Menu
 =====================*/

Route::group(['prefix' => 'scheduleSubject', 'middleware' => ['auth'], 'namespace'=>'App\Http\Controllers\Kesiswaan' ], function() {
    // Route::get('/', function () {
    //     return view('template.maintance');
    // });
    Route::get('/', ['as' => 'Jadwal Matapelajaran', 'uses' => 'ScheduleSubjectController@index']);

    Route::post('/create',  ['as' => 'mapel.create', 'uses' => 'ScheduleSubjectController@create']);
    Route::post('/getlist', ['as' => 'mapel.getlist', 'uses' => 'ScheduleSubjectController@getlist']);
    Route::post('/store',   ['as' => 'mapel.store', 'uses' => 'ScheduleSubjectController@store']);
    Route::post('/delete',  ['as' => 'mapel.delete', 'uses' => 'ScheduleSubjectController@delete']);
});
