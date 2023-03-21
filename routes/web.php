<?php

use App\Http\Controllers\addfeedController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedAddcontroller;
use App\Http\Controllers\feedRequireController;
use App\Http\Controllers\formulationController;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\ProfileController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('feed', FeedAddcontroller::class);
Route::resource('categories', CategoryController::class);
Route::resource('animal', AnimalController::class);
Route::resource('req', feedRequireController::class);
Route::resource('formulate', formulationController::class);
Route::get('/type',[pagecontroller::class,'type']);
Route::get('/ruminant',[pagecontroller::class,'ruminant']);
Route::get('/pig',[pagecontroller::class,'pig']);
Route::get('/poultry',[pagecontroller::class,'poultry']);
Route::get('/fish',[pagecontroller::class,'fish']);

// formulation route
 Route::post('/checkout', [addfeedController::class, 'order'])->name('checkout');
// Route::get('wish', [cartcontroller::class, 'wishlist'])->name('wish');
 Route::get('/tray', [addfeedController::class, 'formula'])->name('formula');
Route::get('add-to-tray/{id}',[addfeedController::class, 'addTotray'])->name('add.to.tray');
Route::patch('update-cart',[addfeedController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart',[addfeedController::class, 'remove'])->name('remove.from.cart');


require __DIR__.'/auth.php';
