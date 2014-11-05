<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', function(){
	return View::make('login');
});

// สต๊อกสินค้า
Route::resource('stock', 'StocksController',
				array('only'=>array('index','store')));
// เพิ่มสินค้า
Route::resource('add', 'AddsController',
				array('only'=>array('index','store')));
// เบิก
Route::resource('withdraw', 'WithdrawsController',
				array('only'=>array('index','store')));
// ขาย
Route::resource('sell', 'SellsController',
				array('only'=>array('index','store')));
// คืน
Route::resource('return', 'ReturnsController',
				array('only'=>array('index','store')));

// รอผลิต
Route::resource('production', 'ProductionsController',
				array('only'=>array('index','store')));

// แจ้งเตือน
Route::resource('alert', 'AlertsController',
				array('only'=>array('index','store')));

// รายงาน
Route::resource('report', 'ReportsController',
				array('only'=>array('index','store')));

// ลูกค้า
Route::resource('customer', 'CustomersController',
				array('only'=>array('index','store')));
