<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Teacher;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use App\Http\Controllers\StudentController;
use App\Models\Course;
use App\Http\Controllers\CourseController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('hello', function(Request $request) {
    return 'Hello World';
});

Route::get('teachers', [TeacherController::class, 'index']);
Route::get('teacher/{id}', [TeacherController::class, 'get']);

