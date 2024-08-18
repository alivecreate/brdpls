<?php

use App\Http\Controllers\Api\SearchController;

Route::get('/search-category', [SearchController::class, 'searchCategory']);
