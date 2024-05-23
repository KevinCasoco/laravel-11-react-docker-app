<?php

use App\Http\Controllers\Api\TaskApiController;
use Illuminate\Support\Facades\Route;

Route::get('/{path?}', function () {
    return view('app');
});

// without installing laravel 11 api
// Route::group(['prefix' => 'api'], function() {
//     Route::post('/save-task', [TaskApiController::class, 'saveTask']);
// });
