<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todo_list_controller;

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

Route::get('/', [todo_list_controller::class, 'index']);

Route::post(
    '/save_item_route', 
    [todo_list_controller::class, 'save_item']
) -> name("save_item_route");

Route::post(
    '/mark_complete',
    function()
    {
        return redirect('/');
    }
) -> name('mark_complete');
