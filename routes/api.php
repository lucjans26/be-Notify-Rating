<?php

use App\Http\Controllers\RatingController;
use Illuminate\Http\Request;
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

const RATING_ROUTE = '/rating';

Route::post(RATING_ROUTE, [RatingController::class, 'like']);
Route::get(RATING_ROUTE, [RatingController::class, 'getRating']);
