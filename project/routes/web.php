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
// Public routes
// Route::group(['prefix' => 'admin'] , function(){

Route::group(['middleware' => 'guest:admin'], function () {
    Route::get('/login', [\App\Http\Controllers\backend\logincontroller::class, 'login'])->name('admin.login');
    Route::post('/add/login', [\App\Http\Controllers\backend\logincontroller::class, 'store'])->name('admin.store');
    Route::get('/register', [\App\Http\Controllers\backend\registercontroller::class, 'register'])->name('admin.register');
    Route::post('/add/register', [\App\Http\Controllers\backend\registercontroller::class, 'store'])->name('admin.store');
});

// Route::middleware(['auth:web'])->group(function () {
    Route::get('/', [\App\Http\Controllers\backend\indexcontroller::class, 'index'])->name('admin.home');
    Route::get('/table', [\App\Http\Controllers\backend\indexcontroller::class, 'table'])->name('admin.table');
    Route::get('/profile', [\App\Http\Controllers\backend\profilecontroller::class, 'profile'])->name('admin.profile');
    Route::get('/form', [\App\Http\Controllers\backend\addusercontroller::class, 'form'])->name('admin.form');
    Route::post('/adduser', [\App\Http\Controllers\backend\addusercontroller::class, 'adduser'])->name('admin.adduser');
    Route::get('/viewuser', [\App\Http\Controllers\backend\addusercontroller::class, 'viewuser'])->name('admin.viewuser');
    Route::get('/edituser/{user_id}/edit ', [\App\Http\Controllers\backend\addusercontroller::class, 'edituser'])->name('admin.edituser');
    Route::get('/deleteuser/{user_id}/delete ', [\App\Http\Controllers\backend\addusercontroller::class, 'deleteuser'])->name('admin.deleteuser');
    Route::get('/category',[\App\Http\Controllers\backend\categorycontroller::class,'index'])->name('admin.category');

    Route::post('/addcategory',[\App\Http\Controllers\backend\categorycontroller::class,'addcategory'])->name('admin.addcategory');
    Route::get('/viewcategory',[\App\Http\Controllers\backend\categorycontroller::class,'viewcategory'])->name('admin.viewcategory');
    Route::get('deletecategory/{category_id}/delete',[\App\Http\Controllers\backend\categorycontroller::class,'deletecategory'])->name('admin.deletecategory');
    
    Route::get('/doctor',[\App\Http\Controllers\backend\doctorcontroller::class,'index'])->name('admin.doctor');
    Route::post('/doctors', [\App\Http\Controllers\backend\doctorcontroller::class, 'storeDoctor'])->name('doctors.store');
    Route::get('/viewdoctors', [\App\Http\Controllers\backend\doctorcontroller::class, 'viewDoctor'])->name('doctors.viewstore');

    Route::get('/city',[\App\Http\Controllers\backend\citycontroller::class,'index'])->name('admin.city');
    Route::post('/addcity',[\App\Http\Controllers\backend\citycontroller::class,'addcity'])->name('admin.addcity');
    Route::get('/viewcity',[\App\Http\Controllers\backend\citycontroller::class,'viewcity'])->name('admin.viewcity');
    Route::get('/contact', [\App\Http\Controllers\backend\contactcontroller::class, 'contact'])->name('admin.contact');
    Route::get('/error', [\App\Http\Controllers\backend\indexcontroller::class, 'error'])->name('admin.error');
    Route::get('/role', [\App\Http\Controllers\backend\rolecontroller::class, 'role'])->name('admin.role');
    Route::post('/addrole', [\App\Http\Controllers\backend\rolecontroller::class, 'addrole'])->name('admin.addrole');
    Route::get('/logout', [\App\Http\Controllers\backend\logincontroller::class, 'logout'])->name('admin.logout');
// });






Route::get('/index',[\App\Http\Controllers\frantend\indexcontroller::class,'index'])->name('frantend.index');
Route::get('/userlogin',[\App\Http\Controllers\frantend\logincontroller::class,'login'])->name('frantend.userindex');

