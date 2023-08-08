<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [UsersController::class, 'panel'] )->name('home');

Route::get('/header', [UsersController::class, 'header'] )->name('header');

Route::get('/footer', [UsersController::class, 'footer'] )->name('footer');

Route::get('/singin', [UsersController::class, 'singin'] )->name('singin');



Route::prefix('/panel')->group(function () {

    Route::get('', [UsersController::class, 'home'] )->name('panel');

    Route::get('/adduser', [UsersController::class, 'adduser'] )->name('adduser');

    Route::get('/users', [UsersController::class, 'users'] )->name('users');

    Route::get('/edituser/{id}', [UsersController::class, 'edituser'])->name('edituser');

    Route::get('/deleteduser/{id}', [UsersController::class, 'deleteduser'])->name('deleteduser');

    Route::get('/deleteduser/{id}/panel', [UsersController::class, 'deleteduser'] )->name('deleteduser');

    Route::get('/edituser/{id}/panel', [UsersController::class, 'editusergo'] )->name('editusergo');

    Route::get('/deleteduser/{id}/panel', [UsersController::class, 'deletedusergo'] )->name('deletedusergo');

    Route::get('/deleteduser/   {id}/panel', [UsersController::class, 'deletedusergo'] )->name('deletedusergo');

    Route::post('/users/edituser/{id}', [UsersController::class, 'edited_user'] )->name('edited_user');

    Route::get('/productsList', [UsersController::class, 'listproducts'] )->name('listproducts');

    Route::get('/Newproduct', [UsersController::class, 'Newproduct'] )->name('Newproduct');



});

Route::post('/layout/users', [UsersController::class, 'store'])->name('store');
Route::prefix('/panel')->group(function () {

  Route::get('/Neworder', [OrderController::class, 'Neworder'])->name('Neworder');
  Route::post('Neworder', [OrderController::class, 'add_order'])->name('add_order');
  Route::get('/Listoforders' , [OrderController::class , 'listorders'])->name('listorders');
  Route::get('/edit/{id}' , [OrderController::class , 'show_edit_order'])->name('show_edit_order');
  Route::put('/edit/{id}' , [OrderController::class , 'edit'])->name('edit');
  Route::delete('/delete/{id}' , [OrderController::class , 'delete'])->name('delete');
});
