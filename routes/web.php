<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\PagesController;
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

Auth::routes();

/**
 * Routes untuk authentication
 */
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

/**
 * Reoute ke app utama Alumni dan Pengunjung
 */
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about.bkk');
Route::get('/alumni', [PagesController::class, 'alumni'])->name('home.alumni');
Route::get('/alumni', [PagesController::class, 'alumni'])->middleware('')->name('home.alumni');
Route::get('/mitra', [PagesController::class, 'mitra'])->name('home.mitra');
Route::get('/mitra', [PagesController::class, 'mitra'])->name('home.mitra');
Route::get('/information', [PagesController::class, 'information'])->name('home.informasi');
Route::get('/information', [PagesController::class, 'information'])->name('home.informasi');

/**
 * Route Dashboard Admin
 */
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('is_admin')->name('admin.home');
Route::get('/dashboard/notification', [NotifyController::class, 'index'])->middleware('is_admin')->name('admin.notif');
Route::get('/dashboard/notification/detail', [NotifyController::class, 'show'])->middleware('is_admin')->name('admin.notif');


/**
 * Route Dashboard Admin Alumni
 */
Route::get('/dashboard/alumni', [AlumniController::class, 'index'])->middleware('is_admin')->name('admin.alumni');
Route::get('/dashboard/alumni/list', [AlumniController::class, 'list'])->middleware('is_admin')->name('admin.alumni.list');
Route::get('/dashboard/alumni/detail/', [AlumniController::class, 'show'])->middleware('is_admin')->name('admin.alumni.detail');
Route::get('/dashboard/alumni/create', [AlumniController::class, 'create'])->middleware('is_admin')->name('admin.alumni.create');
Route::post('/dashboard/alumni/store', [AlumniController::class, 'store'])->middleware('is_admin')->name('admin.alumni.store');
Route::get('/dashboard/alumni/edit/', [AlumniController::class, 'edit'])->middleware('is_admin')->name('admin.alumni.edit');
Route::post('/dashboard/alumni/update/', [AlumniController::class, 'edit'])->middleware('is_admin')->name('admin.alumni.edit');
Route::get('/dashboard/alumni/delete/', [AlumniController::class, 'edit'])->middleware('is_admin')->name('admin.alumni.edit');

/**
 * Route Dashboard Admin User
 */
Route::get('/dashboard/users', [UserController::class, 'index'])->middleware('is_admin')->name('admin.user');
Route::get('/dashboard/users/detail/', [UserController::class, 'show'])->middleware('is_admin')->name('admin.users.detail');
Route::get('/dashboard/users/create', [UserController::class, 'create'])->middleware('is_admin')->name('admin.users.create');
Route::get('/dashboard/users/store', [UserController::class, 'store'])->middleware('is_admin')->name('admin.users.store');
Route::get('/dashboard/users/edit/', [UserController::class, 'edit'])->middleware('is_admin')->name('admin.users.edit');
Route::get('/dashboard/users/update/', [UserController::class, 'update'])->middleware('is_admin')->name('admin.users.update');
Route::get('/dashboard/users/delete/', [UserController::class, 'update'])->middleware('is_admin')->name('admin.users.update');

/**
 * Route Dashboard Admin Information
 */
Route::get('/dashboard/informations', [InformationController::class, 'index'])->middleware('is_admin')->name('admin.news');
Route::get('/dashboard/informations/detail/', [InformationController::class, 'show'])->middleware('is_admin')->name('admin.news.detail');
Route::get('/dashboard/informations/create', [InformationController::class, 'create'])->middleware('is_admin')->name('admin.news.create');
Route::get('/dashboard/informations/store', [InformationController::class, 'store'])->middleware('is_admin')->name('admin.news.store');
Route::get('/dashboard/informations/edit/', [InformationController::class, 'edit'])->middleware('is_admin')->name('admin.news.edit');
Route::get('/dashboard/informations/update/', [InformationController::class, 'update'])->middleware('is_admin')->name('admin.news.update');
Route::get('/dashboard/informations/delete/', [InformationController::class, 'update'])->middleware('is_admin')->name('admin.news.update');

/**
 * Route Dashboard Mitra
 */
Route::get('/mitra/dashboard', [MitraController::class, 'index'])->middleware('is_mitra')->name('mitra.home');