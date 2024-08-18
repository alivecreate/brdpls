<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\ImageUploadController;

Route::get('/search-category', [SearchController::class, 'searchCategory']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::delete('/delete-image', [ImageUploadController::class, 'deleteBusinessImage']);
Route::delete('/delete-business-logo', [ImageUploadController::class, 'deleteBusinessLogo']);
Route::delete('/delete-business-image', [ImageUploadController::class, 'deleteBusinessImage']);


Route::post('/image-upload', [ImageUploadController::class, 'imageUpload']);
Route::post('/image-uploads', [ImageUploadController::class, 'imageUploads']);

