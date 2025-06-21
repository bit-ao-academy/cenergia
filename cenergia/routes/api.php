<?php

use App\Http\Controllers\CenergiaController;
use Illuminate\Support\Facades\Route;


Route::get('/funcionario',[CenergiaController::class,'index']);
Route::post('/funcionario',[CenergiaController::class,'store']);
