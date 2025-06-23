<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('iniciosportzone.principal');
});

// Route::get('/admin/principal', [AdminController::class, 'principal'])
//     ->name('administrador.admin.principal');

Route::prefix('admin')->group(function () {
    Route::get('/principal', [AdminController::class, 'principal'])->name('admin.principal');
});

Route::prefix('admin')->group(function () {
    Route::get('/gestion', [AdminController::class, 'gestion'])->name('admin.Gestion_usuarios');
});

Route::prefix('admin')->group(function () {
    Route::get('/formulario', [AdminController::class, 'formulario'])->name('admin.Formulario_empleados');
});

// RUTAS DEL INSTRUCTOR

Route::prefix('inst')->group(function() {
    Route::get('/principal', [InstructorController::class, 'principal'])->name('inst.principal');
});

Route::prefix('inst')->group(function() {
    Route::get('/horario', [InstructorController::class, 'horario'])->name('inst.horarios');
});

