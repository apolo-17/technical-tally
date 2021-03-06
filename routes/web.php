<?php

use App\Http\Controllers\CompanyController;
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

Route::get('/dashboard', [CompanyController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/', [CompanyController::class, 'create']);
Route::post('send-subscription', [CompanyController::class, 'store']);

require __DIR__ . '/auth.php';
