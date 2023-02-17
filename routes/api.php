<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIDetails;
use App\Http\Controllers\ProductController;

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

Route::get('/', APIDetails::class);

Route::apiResource('/products', ProductController::class)->except(["store"]);