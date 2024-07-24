<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignController;


Route::get('/', function (){
    return view("welcome");
});
Route::get('/designs',[ DesignController::class, 'index']);

Route::get('/videos',[ DesignController::class, 'index']);


Route::group(['middleware' => ['auth']], function() {
    Route::post('/save-design', [DesignController::class, 'saveDesign']);
    Route::get('/templates', [DesignController::class, 'getTemplates']);
    // Other routes...
});