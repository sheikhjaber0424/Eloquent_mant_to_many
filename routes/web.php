<?php

use App\Http\Controllers\MainController;
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
    return view('home');
});

//One to One
Route::get('/one_to_one_index', [MainController::class, 'one_to_one_index'])->name('index_1');
Route::get('/create_one', [MainController::class, 'create_one'])->name('create_1');
Route::post('/store_one', [MainController::class, 'store_one'])->name('store_1');
Route::get('/edit_one/{student}', [MainController::class, 'edit_one'])->name('edit_1');
Route::put('/update_one/{student}', [MainController::class, 'update_one'])->name('update_1');
Route::get('/delete_one/{student}', [MainController::class, 'delete_one'])->name('delete_1');