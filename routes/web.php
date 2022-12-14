<?php
namespace App\Http\Controllers;
namespace App\Http\Livewire;
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
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('dash.dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/add-form',AddForm::class)->middleware(['auth'])->name('add-form');
Route::get('/edit-form/{form_id}',EditForm::class)->middleware(['auth'])->name('edit-form');
Route::get('/get-form/{form_id}',FormResponse::class)->name('get-form');
require __DIR__.'/auth.php';
