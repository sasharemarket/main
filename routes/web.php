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



Route::get('/', ['as' => 'getdatadatewiseclient', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWiseClient']);
Route::post('/getdatadatewiseclientsave', ['as' => 'getdatadatewiseclientsave', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWiseClientSave']);
Route::get('/getdatadatewisedii', ['as' => 'getdatadatewisedii', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWiseDii']);
Route::post('/getdatadatewisediisave', ['as' => 'getdatadatewisediisave', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWiseDiiSave']);
Route::get('/getdatadatewisefii', ['as' => 'getdatadatewisefii', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWiseFii']);
Route::post('/getdatadatewisefiisave', ['as' => 'getdatadatewisefiisave', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWiseFiiSave']);
Route::get('/getdatadatewisepro', ['as' => 'getdatadatewisepro', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWisePro']);
Route::post('/getdatadatewiseprosave', ['as' => 'getdatadatewiseprosave', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWiseProSave']);
// Route::get('get-data-date-wise-client', ['as' => 'getdatadatewiseclient', 'uses' => 'App\Http\Controllers\DataDateWiseController@getDataDateWiseClient']);
