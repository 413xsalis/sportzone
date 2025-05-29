<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;

Route::get('/', function () {
    return view('iniciosportzone.principal');
});

// Route::get('/admin/principal', [AdminController::class, 'principal'])
//     ->name('administrador.admin.principal');

Route::prefix('admin')->group(function() {
    Route::get('/principal', [AdminController::class, 'principal'])->name('admin.principal');
});

Route::prefix('admin')->group(function() {
    Route::get('/gestion', [AdminController::class, 'gestion'])->name('admin.Gestion_usuarios');
});

Route::prefix('admin')->group(function() {
    Route::get('/formulario', [AdminController::class, 'formulario'])->name('admin.Formulario_empleados');
});

//Grupo Instructor
Route::prefix('instructor')->name('instructor.')->group(function(): void {
    // Ruta pública
    Route::get('/inicio', [InstructorController::class, 'inicio'])->name('inicio');
    
    // Ruta protegida
    Route::middleware('auth')->get('/principal', function (): \Illuminate\View\View {
        return view('instructor.principal');
    })->name('principal');
});