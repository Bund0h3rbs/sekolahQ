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



if(Request::is(['home','home/*'])){

    Route::get('/home', function () {
        return view('template.default');
    })->middleware(['auth'])->name('Home');

    /* ======================
    | Default Route Management
    | Route Group
    =========================  */

    }else if(Request::is(['menu_app','menu_app/*'])){
        require __DIR__.'/management/menu_app.php';

    }else if(Request::is(['akademic_year','akademic_year/*'])){
        require __DIR__.'/management/akademic_year.php';

    }else if(Request::is(['akademicKelas','akademicKelas/*'])){
        require __DIR__.'/management/akademicKelas.php';

    }else if(Request::is(['jabatan','jabatan/*'])){
        require __DIR__.'/management/jabatan.php';

    }else if(Request::is(['matapelajaran','matapelajaran/*'])){
        require __DIR__.'/management/matapelajaran.php';

    }else if(Request::is(['aksesuser','aksesuser/*'])){
        require __DIR__.'/management/aksesuser.php';

    }else if(Request::is(['myprofile','myprofile/*'])){
        require __DIR__.'/management/myprofile.php';

    }else if(Request::is(['activity','activity/*'])){
        require __DIR__.'/management/activity.php';

    /* ======================
        | Default Route Kesiswaan
        | Route Group
        =========================  */
    }else if(Request::is(['student','student/*'])){
        require __DIR__.'/kesiswaan/student.php';

    }else if(Request::is(['rombel','rombel/*'])){
        require __DIR__.'/kesiswaan/rombel.php';

    }else if(Request::is(['scheduleSubject','scheduleSubject/*'])){
        require __DIR__.'/kesiswaan/scheduleSubject.php';

// Pegawai Role
}else if(Request::is(['pegawai','pegawai/*'])){
    require __DIR__.'/kepegawaian/pegawai.php';

}else{

    Route::get('/', function () {
        return view('template.default');
    })->middleware(['auth'])->name('Home');

}


require __DIR__.'/auth.php';
