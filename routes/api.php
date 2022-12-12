<?php

use App\Http\Controllers\CarControler;
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

//get api with or without perams

Route::get('employees/{id?}', [CrudController::class, 'getEmployees']);

// post api

Route::post('employees', [CrudController::class, 'addEmployees']);

//put api

Route::put('employees/{id}', [CrudController::class, 'updateEmployees']);

// delete api

Route::delete('employees/{id}', [CrudController::class, 'deleteEmployees']);

Route::match(['get', 'post', 'put', 'delete'], '/user/{id?}', [CarControler::class, 'test']);
