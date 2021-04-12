<?php

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

Route::group([
    'prefix' => 'inventory',
    'namespace' => 'App\Http\Controllers',
    'as' => 'inventory.',
], function(){
    Route::get('/', 'InventoryController@index')->name('index');
    Route::get('/create', 'InventoryController@create')->name('create');
    Route::get('/{inventory}/edit', 'InventoryController@edit')->name('edit');

    Route::post('/', 'InventoryController@store')->name('store');
    Route::put('/{inventory}', 'InventoryController@update')->name('update');
    Route::delete('/{inventory}', 'InventoryController@delete')->name('delete');

});
