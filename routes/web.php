<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\BoxController;

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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/users', [UserController::class, 'index']);
// Route::get('/rfid', [RfidController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('tables/rfid', function () {
    return view('tables/rfid');
})->middleware('auth');

Route::get('rfid/add', [RfidController::class, 'addRfid'])->middleware('auth');
Route::get('rfid/tag/{id}', [RfidController::class, 'getbyTag'])->middleware('auth');

Route::get('rfid/get-data-rfid', [RfidController::class, 'getData'])->name('rfid.get-data-rfid');
Route::post('rfid/add-data-rfid', [RfidController::class, 'addData'])->name('rfid.add-data-rfid');
Route::post('rfid/update-data-rfid', [RfidController::class, 'updateData'])->name('rfid.update-data-rfid');
Route::post('rfid/delete-data-rfid', [RfidController::class, 'deleteData'])->name('rfid.delete-data-rfid');
Route::post('rfid/import-data-rfid', [RfidController::class, 'importData'])->name('rfid.import-data-rfid');

Route::get('box/get-data-box', [BoxController::class, 'getData'])->name('box.get-data-box');