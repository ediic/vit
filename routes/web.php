<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\OrderMailController;

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
    return view('index');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

// Route::get('/gallery', function () {
//     return view('gallery');
// });

Route::post('/command/store', [CommandController::class, 'store']);
Route::get('/command/index', [CommandController::class, 'index'])->middleware('auth.isAdmin')->name('commands.index');
Route::delete('/commands/{id}', [CommandController::class, 'destroy'])->middleware('auth.isAdmin')->name('commands.destroy');
Route::put('/commands/{command}', [CommandController::class, 'update'])->middleware('auth.isAdmin')->name('commands.update');

//Route::get('/email', [OrderMailController::class, 'sendMail'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
