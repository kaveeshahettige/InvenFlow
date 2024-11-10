<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Inventory API routes
Route::prefix('v1')->group(function () {
    Route::apiResource('inventories', InventoryAPIController::class);
});


//to call
//GET /api/v1/inventories	//Retrieve all inventory items
//GET	/api/v1/inventories/{id}	//Retrieve a single item by ID
//POST	/api/v1/inventories	Create a new inventory item
//PUT/PATCH	/api/v1/inventories/{id}	Update an item by ID
//DELETE	/api/v1/inventories/{id}