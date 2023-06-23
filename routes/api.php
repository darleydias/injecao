<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegmentController;

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
Route::get('/teste',function (){ return "Aplicação Injeção";});
//customer
Route::post('/customer',[CustomerController::class,'store']);
//segment
Route::post('/segment',[SegmentController::class,'store']);
Route::get('/segment',[SegmentController::class,'index']);
Route::get('/segment/{id}',[SegmentController::class,'show']);
Route::put('/segment/{id}',[SegmentController::class,'update']);
Route::delete('/segment/{id}',[SegmentController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
