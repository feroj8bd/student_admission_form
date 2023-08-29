<?php

use App\Http\Controllers\AdmissionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admission-form', [AdmissionController::class, 'create'])->name('student.create');
Route::post('/admission-form-store', [AdmissionController::class, 'store'])->name('student.store');
