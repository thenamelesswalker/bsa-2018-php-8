<?php

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

Route::resource('currencies', 'CurrencyController');

//Route::prefix(['currencies'], function () {
//    Route::get('/', 'CurrencyController@index')->name('currencies');
//    Route::get('/add', 'CurrencyController@create')->name('currency-add');
//    Route::get('/{id}', 'CurrencyController@show')->name('currency-show');
//    Route::get('/{id}/edit', 'CurrencyController@edit')->name('currency-edit');
//    Route::post('/delete', 'CurrencyController@delete')->name('currency-delete');
//});



//Route::get('/currencies/add', function () {
//    return view('currencies',
//        [
//            'currencies' => [
//                [
//                    'name' => 'Bitcoin',
//                    'rate' => '6631',
//                ],
//                [
//                    'name' => 'Dogecoin',
//                    'rate' => '0,002695',
//                ],
//                [
//                    'name' => 'Litecoin',
//                    'rate' => '85',
//                ],
//            ]
//        ]
//    );
//})->name('currencies-add');
