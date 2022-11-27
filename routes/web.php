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
Route::get('/one_to_one_index', [MainController::class, 'one_to_one_index'])->name('index.one');
Route::get('/create_one', [MainController::class, 'create_one'])->name('create_1');
Route::post('/store_one', [MainController::class, 'store_one'])->name('store_1');
Route::get('/edit_one/{student}', [MainController::class, 'edit_one'])->name('edit_1');
Route::put('/update_one/{student}', [MainController::class, 'update_one'])->name('update_1');
Route::get('/delete_one/{student}', [MainController::class, 'delete_one'])->name('delete_1');


//One to Many
Route::get('/one_to_many_index', [MainController::class, 'one_to_many_index'])->name('index.many');
Route::get('/create_many', [MainController::class, 'create_many'])->name('create_2');
Route::post('/store_many', [MainController::class, 'store_many'])->name('store_2');
Route::get('/edit_many/{phone}', [MainController::class, 'edit_many'])->name('edit_2');
Route::get('/delete_many/{student}', [MainController::class, 'delete_many'])->name('delete_2');
Route::get('/delete_single/{phone}', [MainController::class, 'delete_single'])->name('delete_3');
Route::put('/update_many/{phone}', [MainController::class, 'update_many'])->name('update_2');


//Many to many
Route::get('/many_to_many_index', [MainController::class, 'many_to_many_index'])->name('index.manyToMany');
Route::get('/many_to_many_create', [MainController::class, 'many_to_many_create'])->name('create_3');
Route::post('/many_to_many_store', [MainController::class, 'many_to_many_store'])->name('store_3');
Route::get('/many_to_many_delete/{group}', [MainController::class, 'many_to_many_delete'])->name('delete_4');
Route::get('/many_to_many_show/{group}', [MainController::class, 'many_to_many_show'])->name('show');
Route::get('/add_student_form/{group}', [MainController::class, 'add_student_form'])->name('addStudent.form');
Route::post('/add_student/{group}', [MainController::class, 'add_student'])->name('addStudent');