<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
Route::get('/', [BookController::class, 'index'])->name('pages.home');
Route::resource('books', BookController::class);

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
 Route::get('/', function () {
    return view('dashboard');
  })->name('dashboard');});
// Route::get('/', function () {
//     return view('pages.home');
// });

require __DIR__ . '/auth.php';
