<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
}); */

// first api

Route::get('/message', function () {
    return 'hello php';
});
Route::get('/employees', [CrudController::class, 'getEmployees']);
