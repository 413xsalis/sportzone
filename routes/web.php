<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColabController;

Route::get('/', function () {
    return view('iniciosportzone.principal');
});

Auth::routes();

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/principal', function () {
//         return view('administrador.admin.principal');
//     })->name('admin.dashboard')->middleware('role:administrador');
    
//     Route::get('/colaborador/principal', function () {
//         return view('colaborador.inicio_colab.principal');
//     })->name('colaborador.dashboard')->middleware('role:colaboradores');
    
//     Route::get('/instructor/principal', function () {
//         return view('instructor.inicio.principal');
//     })->name('instructor.dashboard') ->middleware('role:instructor');
    
//     // Ruta home por defecto (puedes eliminarla si no la necesitas)
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/principal', function () {
        return view('administrador.admin.principal');
    })->name('admin.dashboard')->middleware('role:administrador');
    
    Route::get('/colaborador/principal', function () {
        return view('colaborador.inicio_colab.principal');
    })->name('colaborador.dashboard')->middleware('role:colaborador');
    
    Route::get('/instructor/principal', function () {
        return view('instructor.inicio.principal');
    })->name('instructor.dashboard')->middleware('role:instructor');
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::prefix('admin')->group(function() {
    Route::get('/principal', [AdminController::class, 'principal'])->name('admin.principal');
});

Route::prefix('admin')->group(function() {
    Route::get('/gestion', [AdminController::class, 'gestion'])->name('admin.Gestion_usuarios');
});

Route::prefix('admin')->group(function() {
    Route::get('/formulario', [AdminController::class, 'formulario'])->name('admin.Formulario_empleados');
});

Route::prefix('colab')->group(function() {
    Route::get('/principal', [ColabController::class, 'principal'])->name('colab.principal');
});
Route::prefix('colab')->group(function() {
    Route::get('/gestion', [ColabController::class, 'gestion'])->name('colab.gestion_clases');
});

Route::prefix('colab')->group(function() {
    Route::get('/inscripcion', [ColabController::class, 'inscripcion'])->name('colab.inscripcion');
});

Route::prefix('colab')->group(function() {
    Route::get('/reportes', [ColabController::class, 'reportes'])->name('colab.reportes');
});