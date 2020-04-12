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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('notas', 'Note\NoteController')->except(['edit', 'create']);

//Students
Route::resource('students', 'Student\StudentController')->except(['edit', 'create']);
Route::resource('students.moduls', 'Student\StudentModulController')->only(['index']);

//Moduls
Route::resource('moduls', 'Modul\ModulController')->except(['edit', 'create']);