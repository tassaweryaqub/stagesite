<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\InternshipController;
use App\Http\Controllers\Admin\PracticalTeacherController;
use App\Http\Controllers\Admin\StudentController;
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
    return view('welcome');
});


Route::resource('admin/companies', CompanyController::class); 
Route::resource('admin/internships', InternshipController::class); 
Route::resource('admin/practicalteachers', PracticalTeacherController::class); 
Route::resource('admin/students', StudentController::class); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
