<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return redirect('/login');
});

Route::group(
    ['middleware' => ['auth:sanctum', 'verified', 'CheckRole:admin']],
    function () {
        Route::view('/dashboard', 'dashboard')->name('dashboard');

        // Route for user data
        Route::get('/user', [UserController::class, 'index_view'])->name(
            'user'
        );
        Route::view('/user/new', 'pages.user.user-new')->name('user.new');
        Route::view('/user/edit/{userId}', 'pages.user.user-edit')->name(
            'user.edit'
        );
        // End route user data

        // Route for siswa data
        Route::get('/siswa', [SiswaController::class, 'index_view'])->name(
            'siswa'
        );
        Route::view('/siswa/new', 'pages.siswa.siswa-new')->name('siswa.new');
        Route::view('/siswa/edit/{siswaId}', 'pages.siswa.siswa-edit')->name(
            'siswa.edit'
        );
        // End route siswa data

        // Route for sekolah data
        Route::get('/sekolah', [SekolahController::class, 'index_view'])->name(
            'sekolah'
        );
        Route::view('/sekolah/new', 'pages.sekolah.sekolah-new')->name(
            'sekolah.new'
        );
        Route::view(
            '/sekolah/edit/{sekolahId}',
            'pages.sekolah.sekolah-edit'
        )->name('siswa.edit');
        // End route sekolah data
    }
);

Route::group(
    ['middleware' => ['auth:sanctum', 'verified', 'CheckRole:user']],
    function () {
        return view('welcome');
    }
);
