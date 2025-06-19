<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;





Route::get('/', function () {
    return view('administrador/admin/principal');
    // return view('iniciosportzone.principal');
});

Auth::routes();


Auth::routes();


Route::resource('products', ProductController::class)
    ->middleware(['auth', 'check.role:administrador']); 

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


Route::prefix('admin')->group(function() {
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');

});

