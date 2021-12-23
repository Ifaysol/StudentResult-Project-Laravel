<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StudentImportController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\StudentClassController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('marks', MarkController::class);
Route::resource('studentClass', StudentClassController::class);
Route::get('/result/show', [ShowController::class, 'index'])->name("result.show");
Route::get('/result/view', [ViewController::class, 'index'])->name("result.view");




//Route::get('/import', [StudentController::class, 'importAdd'])->name('import');

Route::get('/student/import',[StudentImportController::class,'show'])->name("student.show");

Route::post('import/student', [StudentImportController::class, 'store'])->name('student.import');


require __DIR__.'/auth.php';
