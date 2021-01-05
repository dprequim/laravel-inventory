<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('tin/pdf', 'PdfController@tinpdf');
Route::get('purchaserequest/pdf', 'PdfController@prequestpdf');
Route::get('apr/pdf', 'PdfController@aprpdf');
Route::get('ics/pdf', 'PdfController@icspdf');
Route::get('par/pdf', 'PdfController@parpdf');
Route::get('waste/pdf', 'PdfController@wastepdf');
Route::get('burs/pdf', 'PdfController@burspdf');
Route::get('cenrr/pdf', 'PdfController@cenrrpdf');
Route::get('dv/pdf', 'PdfController@dvpdf');
Route::get('rfq/pdf', 'PdfController@rfqpdf');
Route::get('ris/pdf', 'PdfController@rispdf');
Route::get('obr/pdf', 'PdfController@obrpdf');
Route::get('ptr/pdf', 'PdfController@ptrpdf');
Route::get('rep/pdf', 'PdfController@reppdf');
Route::get('iar/pdf', 'PdfController@iarpdf');
Route::get('route/pdf', 'PdfController@routepdf');
Route::get('porder/pdf', 'PdfController@porderpdf');
Route::get('abs/pdf', 'PdfController@abspdf');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
