<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\NewsReadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Place your API routes here. The ResolveUserByDeviceId middleware is
| automatically applied to the API middleware group in bootstrap/app.php.
|
*/

// Get all unread news for current custom_user (resolved by middleware via device_id header)
Route::get('news', [NewsController::class, 'index']);

// Mark specific article as read by current custom_user (per device)
Route::post('news/read/{article_id}', [NewsReadController::class, 'store']);
