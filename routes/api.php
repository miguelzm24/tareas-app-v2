<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/', function() {
    return response()->json(['message' => 'API Laravel 8']);
});

Route::get('/trabajadores/index', [TrabajadorController::class, 'index'])->name('api.trabajadores.index');
Route::get('/trabajadores/show/{id}', [TrabajadorController::class, 'show'])->name('api.trabajadores.show');
Route::post('/trabajadores/store', [TrabajadorController::class, 'store'])->name('api.trabajadores.store');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Ruta para reenviar el email de verificación (por si el usuario no lo recibió)
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return response()->json(['message' => 'Verification email sent']);
})->middleware(['auth:sanctum', 'throttle:6,1'])->name('verification.send');

// Ruta para verificar el email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return response()->json(['message' => 'Email successfully verified']);
})->middleware(['auth:sanctum', 'signed'])->name('verification.verify');