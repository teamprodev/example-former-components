<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FormerController;
use App\Http\Livewire\UserForm;
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

Route::get('/', [UserForm::class, 'render']);
Route::post('/form/create', [FormerController::class, 'create'])->name('form.create');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
