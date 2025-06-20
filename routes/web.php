<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColabController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('iniciosportzone.principal');
});


// Route::get('/admin/principal', [AdminController::class, 'principal'])
//     ->name('administrador.admin.principal');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/principal', function () {
        return view('administrador.admin.principal');
    })->name('admin.dashboard');
    
    Route::get('/colaborador/principal', function () {
        return view('colaborador.inicio_colab.principal');
    })->name('colaborador.dashboard');
    
    Route::get('/instructor/principal', function () {
        return view('instructor.inicio.principal');
    })->name('instructor.dashboard');
    
    // Ruta home por defecto (puedes eliminarla si no la necesitas)
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

Route::prefix('admin')->group(function() {
    Route::get('/reportes/generar', [ReporteController::class, 'generarDesdeFormulario'])->name('reportes.generar');
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


//RUTAS DEL INSTRUCTOR

Route::prefix('inst')->group(function() {
    Route::get('/principal', [InstructorController::class, 'principal'])->name('inst.principal');
});

Route::prefix('inst')->group(function() {
    Route::get('/horario', [InstructorController::class, 'horario'])->name('inst.horarios');
});

//controlador formulario inscripciones

Route::get('/inscribir', [EstudianteController::class, 'create'])->name('estudiantes.create');
Route::post('/inscribir', [EstudianteController::class, 'store'])->name('estudiantes.store');