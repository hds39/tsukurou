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
Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [App\Http\Controllers\TopController::class, 'index'])->name('top');
    Route::post('/create-data', [App\Http\Controllers\TopController::class, 'createData'])->name('create-data');

    Route::get('/data/{data}', [App\Http\Controllers\RegisteredDataController::class, 'showDataForm'])->name('data');

    Route::get('/data/{data}/journals', [App\Http\Controllers\Data\JournalController::class, 'showJournalsForm'])->name('data.journals');
    Route::get('/data/{data}/general-ledger', [App\Http\Controllers\Data\GeneralLedgerController::class, 'showGeneralLedgerForm'])->name('data.general-ledger');
    Route::get('/data/{data}/bs', [App\Http\Controllers\Data\BsController::class, 'showBsForm'])->name('data.bs');
    Route::get('/data/{data}/pl', [App\Http\Controllers\Data\PlController::class, 'showPlForm'])->name('data.pl');
    Route::get('/data/{data}/balance-register', [App\Http\Controllers\Data\BalanceController::class, 'showRegistrationForm'])->name('data.balance-register');
    Route::post('/data/{data}/balance-register', [App\Http\Controllers\Data\BalanceController::class, 'register'])->name('data.balance-register');
    Route::post('/data/{data}/balance-register/category', [App\Http\Controllers\Data\BalanceController::class, 'registerCategory'])->name('data.balance-register-category');
});

Auth::routes();

