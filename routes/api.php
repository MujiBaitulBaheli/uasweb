<?php
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('customer', [\App\Http\Controllers\Api\CustController::class,'index']);
 //Route::post('customer/post', [\App\Http\Controllers\Api\CustController::class,'store']);


Route::group(['prefix' => 'v1'], function() {
    Route::get('destinasi', [DestinasiController::class,'index']);
    Route::post('destinasi/{id}', [DestinasiController::class,'store'])->middleware('auth:sanctum');
    Route::patch('destinasi/{id}', [DestinasiController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('destinasi/{id}', [DestinasiController::class, 'delete'])->middleware('auth:sanctum');

    Route::get('komentar', [KomentarController::class,'index']);
    Route::post('komentar/{id}', [KomentarController::class,'store'])->middleware('auth:sanctum');
    Route::patch('komentar/{id}', [KomentarController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('komentar/{id}', [KomentarController::class, 'delete'])->middleware('auth:sanctum');

    Route::get('ulasan', [UlasanController::class,'index']);
    Route::post('ulasan/{id}', [UlasanController::class,'store'])->middleware('auth:sanctum');
    Route::patch('ulasan/{id}', [UlasanController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('ulasan/{id}', [UlasanController::class, 'delete'])->middleware('auth:sanctum');



});
Route::post('/register', [AuthController::class, 'registrasi']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
