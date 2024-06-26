<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Models\Game;
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

Route::get('/', function () {
    $games = Game::orderBy('created_at', 'desc')->paginate(4);
    return view('welcome', ['games' => $games]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('games', GameController::class);
Route::get('/search', [GameController::class, 'search'])->name('search');

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::resource('admin', AdminController::class);
});

Route::middleware(['auth', 'verified', 'customer'])->group(function () {
    Route::resource('customer', CustomerController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::get('/invoices/create/{id}', [InvoiceController::class, 'create'])->name('invoices.create');
});

require __DIR__.'/auth.php';
