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

//Grupo Instructor
Route::prefix('instructor/inicio')->name('instructor.inicio.')->group(function () {
    Route::get('/principal', [InstructorController::class, 'principal'])->name('principal');
});


Route::prefix('instructor/formulario')
    ->name('instructor.formulario.')
    ->group(function () {
        // 1) Listado de estudiantes (GET  /instructor/formulario)
        Route::get('/', [FormularioController::class, 'index'])
            ->name('principal');

        // 2) Mostrar formulario de creación (GET  /instructor/formulario/crear)
        Route::get('crear', [FormularioController::class, 'crearEstudiante'])
            ->name('crear');

        // 3) Guardar nuevo estudiante (POST /instructor/formulario)
        Route::post('/', [FormularioController::class, 'guardarEstudiante'])
            ->name('guardar');

        // 4) Actualizar asistencia (POST /instructor/formulario/asistencia/{estudiante})
        Route::post('asistencia/{estudiante}', [FormularioController::class, 'asistencia'])
            ->name('asistencia.update');
    });
