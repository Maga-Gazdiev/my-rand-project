<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
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
})->name('welcome');

Route::resources([
    'news' => 'App\Http\Controllers\NewsController',
    'schedule' => 'App\Http\Controllers\ScheduleController',
    'search' => 'App\Http\Controllers\SearchController',
    'prof' => 'App\Http\Controllers\ProfController',
    'teacher' => 'App\Http\Controllers\TeacherController',
]);

Route::get('/news/show/{id}', [NewsController::class, 'sea'])->name('news.sea');
Route::get('/teacher/show/{id}', [TeacherController::class, 'sea'])->name('teacher.sea');


Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
