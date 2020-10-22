<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/', function(Request $request) {
    return 'Backend API. Refer to README.md.';
});

Route::get('teachers', [TeacherController::class, 'all']);
Route::get('teacher/{id}', [TeacherController::class, 'getById']);

Route::get('students', [StudentController::class, 'all']);
Route::get('student/{id}', [StudentController::class, 'getById']);

Route::get('courses', [CourseController::class, 'all']);
Route::get('course/{id}', [CourseController::class, 'getById']);

Route::get('grades', [GradeController::class, 'all']);
Route::get('grade/{id}', [GradeController::class, 'getById']);
