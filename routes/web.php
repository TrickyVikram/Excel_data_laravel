<?php

use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/excel','excel');
Route::resource('excel_export', ExcelController::class);