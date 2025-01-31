<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\NewsController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProgramController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\PartnerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/home', [LandingPageController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('show_login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/tes', function () {
    return view('tes');
});
Route::get('/admin', function () {
    return view('backend.index');
});
Route::get('/form', function () {
    return view('backend.form');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dasboard', [DashboardController::class, 'read'])->name('admin.dasboard');

    Route::get('/admin/news', [NewsController::class, 'read'])->name('admin.news');
    Route::get('/admin/news/tambah', [NewsController::class, 'create'])->name('admin.news.tambah');
    Route::get('/admin/news/detail/{id}', [NewsController::class, 'detail'])->name('admin.news.detail');
    Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/admin/news/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::post('/admin/news/store', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/admin/news/delete/{id}', [NewsController::class, 'delete'])->name('admin.news.delete');

    Route::get('/admin/program', [ProgramController::class, 'read'])->name('admin.program');
    Route::get('/admin/program/tambah', [ProgramController::class, 'create'])->name('admin.program.tambah');
    Route::post('/admin/program/store', [ProgramController::class, 'store'])->name('admin.program.store');
    Route::get('/admin/program/detail/{id}', [ProgramController::class, 'detail'])->name('admin.program.detail');
    Route::get('/admin/program/edit/{id}', [ProgramController::class, 'edit'])->name('admin.program.edit');
    Route::put('/admin/program/update/{id}', [ProgramController::class, 'update'])->name('admin.program.update');
    Route::get('/admin/program/delete/{id}', [ProgramController::class, 'delete'])->name('admin.program.delete');

    Route::get('/admin/gallery', [GalleryController::class, 'read'])->name('admin.gallery');
    Route::get('/admin/gallery/tambah', [GalleryController::class, 'create'])->name('admin.gallery.tambah');
    Route::post('/admin/gallery/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('/admin/gallery/detail/{id}', [GalleryController::class, 'detail'])->name('admin.gallery.detail');
    Route::get('/admin/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
    Route::put('/admin/gallery/update/{id}', [GalleryController::class, 'update'])->name('admin.gallery.update');
    Route::get('/admin/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('admin.gallery.delete');

    Route::get('/admin/partner', [PartnerController::class, 'read'])->name('admin.partner');
    Route::get('/admin/partner/tambah', [PartnerController::class, 'create'])->name('admin.partner.tambah');
    Route::post('/admin/partner/store', [PartnerController::class, 'store'])->name('admin.partner.store');
    Route::get('/admin/partner/detail/{id}', [PartnerController::class, 'detail'])->name('admin.partner.detail');
    Route::get('/admin/partner/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
    Route::put('/admin/partner/update/{id}', [PartnerController::class, 'update'])->name('admin.partner.update');
    Route::get('/admin/partner/delete/{id}', [PartnerController::class, 'delete'])->name('admin.partner.delete');

    Route::get('/admin/company', [CompanyController::class, 'index'])->name('admin.company');
    Route::put('/admin/company/update/{id}', [CompanyController::class, 'update'])->name('admin.company.update');

});
