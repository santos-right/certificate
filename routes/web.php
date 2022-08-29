<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\TrainersController;
use App\Http\Controllers\CertificateController;

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

Auth::routes();


Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
Route::get('/trainers', [TrainersController::class, 'index'])->name('trainers');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/verify-certificate', [VerifyController::class, 'index'])->name('verify-certificate');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/tables', [TablesController::class, 'index'])->name('tables');

Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate');
Route::post('/certificate', [CertificateController::class, 'store']);
Route::get('/edit-certificate/{certificate}', [CertificateController::class, 'edit'])->name('edit-certificate');
Route::put('/certificate/{certificate}', [CertificateController::class, 'update'])->name('update-certificate');
Route::delete('/certificate/{certificate}', [CertificateController::class, 'destroy'])->name('delete-certificate');

Route::get('/index', [IndexController::class, 'index'])->name('index');

// Route::post('/verify/search/{certificate_no}', [VerifyController::class, 'search'])->name('verify');
// Route::post('/verify/{certificate_no}', [VerifyController::class, 'show'])->name('verify');