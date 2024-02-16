<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;

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

/////----show all listings----/////
Route::get('/', [ListingController::class, 'index']);

/////-----show form to create new listing-----/////
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

/////-----store listing data-----/////
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth')->name('store');


/////-----show single listing-----/////
Route::get('/listings/{listing}', [ListingController::class, 'show']);

/////-----manage listings-----/////
Route::get('listing/manage', [ManageController::class, 'manageLists'])->middleware('auth');

/////-----show edit form-----/////
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');


/////-----update listing-----/////
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');


/////-----delete listing-----/////
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


/////-----show register/create user form-----/////
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

/////-----create new user-----/////
Route::post('/users', [UserController::class, 'store']);

/////-----show login form-----/////
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

/////-----login user-----/////
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

/////-----log user out-----/////
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

