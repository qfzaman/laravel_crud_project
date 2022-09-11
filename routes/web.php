<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

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

Route::view('/', 'welcome');
/* page route, blade file */
Route::view('contact-us', 'contact')->name('contact');

// Route::get('customers', [CustomersController::class, 'index']);
// Route::get('customers.create', [CustomersController::class, 'create']);
// Route::post('customers', [CustomersController::class, 'store']);
// Route::get('customers/{customer}', [CustomersController::class, 'show']);
// Route::get('customers/{customer}/edit', [CustomersController::class, 'edit']);
// Route::patch('customers/{customer}', [CustomersController::class, 'update']);
// Route::delete('customers/{customer}', [CustomersController::class, 'destroy']);

Route::resource('customers', CustomersController::class);
