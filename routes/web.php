<?php

use App\Http\Controllers\AboutDepartmentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
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


Route::prefix('aboutCaf')->group(function () {
    Route::get('/', [AboutDepartmentController::class, 'index'])->name('aboutCaf.index');
    
    Route::prefix('nir')->group(function () {
        Route::get('/', [AboutDepartmentController::class, 'nir'])->name('aboutCaf.nir.index');
        Route::get('/public', [AboutDepartmentController::class, 'public'])->name('aboutCaf.nir.public');
        Route::get('/study', [AboutDepartmentController::class, 'study'])->name('aboutCaf.nir.study');
        Route::get('/qualic', [AboutDepartmentController::class, 'qualic'])->name('aboutCaf.nir.qualic');
        Route::get('/desert', [AboutDepartmentController::class, 'desert'])->name('aboutCaf.nir.desert');
    });
    
    Route::prefix('ymn')->group(function () {
        Route::get('/', [AboutDepartmentController::class, 'ymn'])->name('aboutCaf.ymn.index');
        Route::get('/organ', [AboutDepartmentController::class, 'organ'])->name('aboutCaf.ymn.organ');
        Route::get('/prov', [AboutDepartmentController::class, 'prov'])->name('aboutCaf.ymn.prov');
        Route::get('/study', [AboutDepartmentController::class, 'studys'])->name('aboutCaf.ymn.study');
        Route::get('/vosp', [AboutDepartmentController::class, 'vosp'])->name('aboutCaf.ymn.vosp');
        Route::get('/nauch', [AboutDepartmentController::class, 'nauch'])->name('aboutCaf.ymn.nauch');
        Route::get('/libr', [AboutDepartmentController::class, 'libr'])->name('aboutCaf.ymn.libr');
        Route::get('/sost', [AboutDepartmentController::class, 'sost'])->name('aboutCaf.ymn.sost');
        Route::get('/pps', [AboutDepartmentController::class, 'pps'])->name('aboutCaf.ymn.pps');
        Route::get('/work', [AboutDepartmentController::class, 'work'])->name('aboutCaf.ymn.work');
    });
});

Route::prefix('schedule')->group(function () {
    Route::get('/', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::post('/', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::get('/create', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::get('/show/{id}', [ScheduleController::class, 'show'])->name('schedule.show');
});

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::post('/', [NewsController::class, 'store'])->name('news.store');
    Route::get('/create', [NewsController::class, 'create'])->name('news.create');
    Route::get('/show/{id}', [NewsController::class, 'show'])->name('news.show');
});

Route::prefix('teacher')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teacher.index');
    Route::post('/', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::get('/show/{id}', [TeacherController::class, 'show'])->name('teacher.show');
});


Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
