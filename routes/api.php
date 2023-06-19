<?php

use App\Http\Controllers\Api\V1\CompanyController;
use App\Http\Controllers\Api\V1\ContactController;
use App\Http\Controllers\Api\V1\InteractionController;
use App\Http\Controllers\Api\V1\JobTitleController;
use App\Models\Contact;
use App\Models\Interaction;
use App\Models\User;
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
        'ack' => 'pong',
    ], Response::HTTP_OK);
});

if (! app()->runningUnitTests()) {
    // login as super_admin
    auth()->login(User::factory()->create()->assignRole('super_admin'));
}

Route::group(['middleware' => ['auth:sanctum']], function () {
    // Contact
    Route::group([
        'prefix' => 'contact', 'as' => 'contact.',
        'controller' => ContactController::class,
    ], function () {
        Route::get('index', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::put('update/{uuid}', 'update')->name('update');
        Route::get('{uuid}', 'show')->name('show');
        Route::delete('{uuid}', 'delete')->name('delete')->can('delete', Contact::class);
    });

    // Interaction
    Route::group([
        'prefix' => 'interaction', 'as' => 'interaction.',
        'controller' => InteractionController::class,
    ], function () {
        Route::get('index', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::put('update/{uuid}', 'update')->name('update');
        Route::get('{uuid}', 'show')->name('show');
        Route::delete('{uuid}', 'delete')->name('delete')->can('delete', Interaction::class);
    });

    // Company
    Route::group([
        'prefix' => 'company', 'as' => 'company.',
        'controller' => CompanyController::class,
    ], function () {
        Route::get('index', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::put('update/{uuid}', 'update')->name('update');
        Route::get('{uuid}', 'show')->name('show');
        Route::delete('{uuid}', 'delete')->name('delete')->can('delete', 'App\\Models\Company');
    });

    // Job Title
    Route::group(['prefix' => 'jobtitle', 'as' => 'jobtitle.'], function () {
        Route::apiResource('jobtitle', JobTitleController::class);
    });

    //
});
