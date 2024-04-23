<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellsController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clearex', function() {
//    return 'ss';
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Application cache has been cleared , <br> Routes cache has been cleared
    , <br> Config cache has been cleared , <br> View cache has been cleared';
});



Route::get('/sells', [SellsController::class, 'index'])->name('visitSells');
Route::get('/visitSearch', [SellsController::class, 'search'])->name('visitSearch');
Route::get('/main', [SellsController::class, 'main'])->name('main');

Route::get('/users', [SellsController::class, 'users'])->name('users');
Route::get('/create', [SellsController::class, 'create'])->name('create');
Route::post('/addSellAction', [SellsController::class, 'addSellAction'])->name('addSellAction');

Route::get('/addUser', [UserController::class, 'addUser'])->name('addUser');
Route::post('/addUserAction', [UserController::class, 'addUserAction'])->name('addUserAction');