<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



/* PUBLIC */
Route::middleware('api')->group(function () { 
    
    Route::prefix('user')->group(function(){
        Route::post('', [UserController::class, 'store']);
    });

});


Route::middleware('auth:api')->group(function(){

    Route::prefix('user')->group(function(){

        Route::get('', [UserController::class, 'index']);

    });
});