<?php

use App\Http\Controllers\Api\V1\ContactController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

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

Route::get('ping', function () {
    return response()->json([
        'data' => 'pong',
    ], Response::HTTP_OK);
});

// auth()->loginUsingId(User::factory()->create()->id);

Route::group([
    'prefix' => 'contact',
    'as' => 'contact.',
    'controller' => ContactController::class,
    'middleware' => ['auth:sanctum'],
], function () {
    Route::get('/index', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{Contact:uuid}', 'update')->name('update');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
