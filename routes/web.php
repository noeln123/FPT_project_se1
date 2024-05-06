<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\CarsController@index')->name('index');
Route::get('/catalogue', 'App\Http\Controllers\CarsController@goCatalogue')->name('goCatalogue');
// Route::get('/catalogue/{vehicle_type}', 'App\Http\Controllers\CarsController@goCatalogueType')->name('goCatalogueType');
Route::get('/catalogue/{vehicle_type}/{id}', 'App\Http\Controllers\CarsController@goVehicleDetail')->name('goVehicleDetail');
Route::get('/compare', 'App\Http\Controllers\CarsController@goCompare')->name('goCompare');
Route::get('/compare/{id1}-{id2}', 'App\Http\Controllers\CarsController@compare')->name('compare');
Route::get('/contact', 'App\Http\Controllers\CarsController@goContact')->name('goContact');
Route::get('/register', 'App\Http\Controllers\CarsController@goRegister')->name('goRegister');
Route::get('/warranty', 'App\Http\Controllers\CarsController@goWarranty')->name('goWarranty');
Route::get('/warranty/{brand}', 'App\Http\Controllers\CarsController@goWarrantyBrand')->name('goWarrantyBrand');
Route::get('/finance', 'App\Http\Controllers\CarsController@goFinance')->name('goFinance');
Route::get('/find_a_dealer', 'App\Http\Controllers\CarsController@goFindDealer')->name('goFindDealer');

Route::get('/catalogue/motor', 'App\Http\Controllers\CarsController@goCatalogue2')->name('goCatalogue2');
