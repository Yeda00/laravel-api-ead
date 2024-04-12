<?php

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

Route::get('/courses', [\App\Http\Controllers\CourseController::class, 'index']);

Route::get('/courses/{id}', [\App\Http\Controllers\CourseController::class, 'show']);

Route::get('/courses/{id}/modules', [\App\Http\Controllers\ModuleController::class, 'index']);

Route::get('/modules/{id}/lessons', [\App\Http\Controllers\LessonController::class, 'index']);

Route::get('/lessons/{id}', [\App\Http\Controllers\LessonController::class, 'show']);

Route::get('/supports', [\App\Http\Controllers\SupportController::class, 'index']);


Route::get('/', function() {
    return response()->json([
        "sucess" => true,
    ]);
});
