<?php
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Auth::routes();

Route::get('/', function () {
    return view('iniciosportzone.principal');
});


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
    Route::get('/formulario', [AdminController::class, 'formulario'])->name('admin.Formulario_empleados');
});

Route::get('/admin/gestion-usuarios', function () {
    return view('administrador.admin.gestion_usuarios');
})->name('admin.Gestion_usuarios');