<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColabController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\HorarioController;

Route::get('/', function () {
    return view('iniciosportzone.principal');
});


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

//<<<<<<< HEAD
//<<<<<<< HEAD
//<<<<<<< Updated upstream
Route::get('/', function () {
   return view('colaborador.reportes.principal');
});
//=======
//=======
//>>>>>>> a664ae12ace56ecd4a2473d06be8c7e0962066cb
//=======
//>>>>>>> a664ae12ace56ecd4a2473d06be8c7e0962066cb







Route::prefix('colab')->group(function() {
    Route::get('/principal', [ColabController::class, 'principal'])->name('colab.principal');
});
Route::prefix('colab')->group(function() {
    Route::get('/gestion', [ColabController::class, 'gestion'])->name('colab.gestion_clases');
//<<<<<<< HEAD
//<<<<<<< HEAD
});

Route::prefix('colab')->group(function() {
    Route::get('/inscripcion', [ColabController::class, 'inscripcion'])->name('colab.inscripcion');

});

Route::prefix('colab')->group(function() {
    Route::get('/reportes', [ColabController::class, 'reportes'])->name('colab.reportes');
});
//>>>>>>> a664ae12ace56ecd4a2473d06be8c7e0962066cb


//RUTAS DEL INSTRUCTOR

Route::prefix('inst')->group(function() {
    Route::get('/principal', [InstructorController::class, 'principal'])->name('inst.principal');
});

Route::prefix('inst')->group(function() {
    Route::get('/horario', [InstructorController::class, 'horario'])->name('inst.horarios');
});


Route::get('/inscribir', [EstudianteController::class, 'create'])->name('estudiantes.create');
Route::post('/inscribir', [EstudianteController::class, 'store'])->name('estudiantes.store');
//>>>>>>> a664ae12ace56ecd4a2473d06be8c7e0962066cb
//=======
Route::get('/gestion_clases/principal', [HorarioController::class, 'mostrarPrincipal'])->name('gestion_clases.principal');

Route::get('/colab/horarios/crear', [HorarioController::class, 'create'])->name('horarios.create');
Route::post('/colab/horarios', [HorarioController::class, 'store'])->name('horarios.store');



Route::prefix('colab')->group(function() {
   Route::get('/inscripcion', [ColabController::class, 'inscripcion'])->name('colab.inscripcion');
   Route::get('/inscripcion/listado', [EstudianteController::class, 'listado'])->name('colab.inscripcion.listado');
   Route::get('/reportes', [ColabController::class, 'reportes'])->name('colab.reportes');
   Route::get('/estudiantes/{id}/edit', [EstudianteController::class, 'edit'])->name('estudiantes.edit');
   Route::put('/estudiantes/{id}', [EstudianteController::class, 'update'])->name('estudiantes.update');
   Route::delete('/estudiantes/{id}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');

});

Route::prefix('colab')->group(function() {
    Route::get('/reportes', [ColabController::class, 'reportes'])->name('colab.reportes');
});

//editar y eliminar en horario

Route::get('/horarios/{horario}/edit', [HorarioController::class, 'edit'])->name('horarios.edit');
Route::put('/horarios/{horario}', [HorarioController::class, 'update'])->name('horarios.update');
Route::delete('/horarios/{horario}', [HorarioController::class, 'destroy'])->name('horarios.destroy');

//listado de inscritos




//RUTAS DEL INSTRUCTOR

//Route::prefix('inst')->group(function() {
  //  Route::get('/principal', [InstructorController::class, 'principal'])->name('inst.principal');
//});

//Route::prefix('inst')->group(function() {
  //  Route::get('/horario', [InstructorController::class, 'horario'])->name('inst.horarios');
//});

//controlador formulario inscripciones

//Route::get('/inscribir', [EstudianteController::class, 'create'])->name('estudiantes.create');
//Route::post('/inscribir', [EstudianteController::class, 'store'])->name('estudiantes.store');
//>>>>>>> a664ae12ace56ecd4a2473d06be8c7e0962066cb
//=======
//});

//Route::prefix('colab')->group(function() {
  //  Route::get('/inscripcion', [ColabController::class, 'inscripcion'])->name('colab.inscripcion');
//});

//Route::prefix('colab')->group(function() {
  //  Route::get('/reportes', [ColabController::class, 'reportes'])->name('colab.reportes');
//});


//RUTAS DEL INSTRUCTOR

//Route::prefix('inst')->group(function() {
  //  Route::get('/principal', [InstructorController::class, 'principal'])->name('inst.principal');
//});

//Route::prefix('inst')->group(function() {
  //  Route::get('/horario', [InstructorController::class, 'horario'])->name('inst.horarios');
//});

//controlador formulario inscripciones

//Route::get('/inscribir', [EstudianteController::class, 'create'])->name('estudiantes.create');
//Route::post('/inscribir', [EstudianteController::class, 'store'])->name('estudiantes.store');
//>>>>>>> a664ae12ace56ecd4a2473d06be8c7e0962066cb
