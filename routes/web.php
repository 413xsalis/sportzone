<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LibrosController;

Route::get('/', function () {
    return view('register');
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

Route::get('/libros/crear',[LibrosController::class, 'crear'])->name('libros.crear');
Route::post('/libros/store',[LibrosController::class, 'store'])->name('libros.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController1::class, 'index'])->name('home');

route::resource('admin/dashboard', AdminController::class)->middleware(['auth','role:admin']);