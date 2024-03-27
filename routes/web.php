<?php


use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\WordController as AdminWordController;
// se un domani da problemi sappiamo il perche' (\admin)
use App\Http\Controllers\TagController as AdminTagController;
use App\Http\Controllers\LinkController as AdminLinkController;

use App\Http\Controllers\Guest\WordController as GuestWordController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', GuestHomeController::class)->name('guest.home');

Route::prefix('/admin')->name('admin')->middleware('auth')->group(function () {
    Route::get('', AdminHomeController::class)->name('home');
    // ROTTE WORD
    Route::resource('words', AdminWordController::class);
    // ROTTE LINKS
    Route::resource('links', AdminLinkController::class);
    // ROTTE TAGS
    Route::resource('tags', AdminTagController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
