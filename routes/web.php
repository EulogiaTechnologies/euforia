<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\VideoController;


Route::get('/', function (){
    return view("welcome");
});
Route::get('/edit-design', [DesignController::class, 'index'])->name('edit-design');
Route::get('/edit-video', [VideoController::class, 'index'])->name('edit-video');


Route::group(['middleware' => ['auth']], function() {
    Route::post('/save-design', [DesignController::class, 'saveDesign']);
    Route::get('/templates', [DesignController::class, 'getTemplates']);
    // Other routes...
});