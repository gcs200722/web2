<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoodinatorController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'check_login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'check_register']);
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminController::class, 'home'])->name('admin.home');
    Route::resources([
        'user' => UserController::class,
    ]);
    Route::get('/contributions', [AdminController::class, 'showcontribution'])->name('contributions.show');

})->middleware(checkAdmin::class);
Route::group(['prefix' => '/student'], function () {
    Route::get('/', [StudentController::class, 'home'])->name('student.home');
    Route::get('/contributions', [StudentController::class, 'formsubmit'])->name('student.submit');
    Route::post('/contribution', [StudentController::class, 'store'])->name('contributions.store');

})->middleware(checkStudent::class);
Route::group(['prefix' => '/manager'], function () {
    Route::get('/', [ManagerController::class, 'home'])->name('manager.home');
})->middleware(checkManager::class);
Route::group(['prefix' => '/coodinator'], function () {
    Route::get('/', [CoodinatorController::class, 'home'])->name('coodinator.home');
    Route::group(['prefix' => 'contribution/it'], function () {
        Route::get('view', [ContributionController::class, 'itindex'])->name('contribution.it');
    })->middleware(ITcheck::class);
    Route::group(['prefix' => 'contribution/graphic'], function () {
        Route::get('view', [ContributionController::class, 'graphicindex'])->name('contribution.graphic');
    })->middleware(graphicCheck::class);
    Route::group(['prefix' => 'contribution/business'], function () {
        Route::get('view', [ContributionController::class, 'businessindex'])->name('contribution.business');
    })->middleware(businessCheck::class);
})->middleware(checkCoodinator::class);
