<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColabController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ReporteController;


// Ruta principal
Route::get('/', function () {
    return view('iniciosportzone.principal');
});

Auth::routes();

// Rutas autenticadas por rol
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/principal', [AdminController::class, 'principal'])->name('admin.dashboard');
    Route::get('/colaborador/principal', [ColabController::class, 'principal'])->name('colaborador.dashboard');
    Route::get('/instructor/principal', [InstructorController::class, 'principal'])->name('instructor.dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// ================= ADMIN =================
Route::prefix('admin')->group(function() {
    Route::get('/principal', [AdminController::class, 'principal'])->name('admin.principal');
    Route::get('/gestion', [AdminController::class, 'gestion'])->name('admin.Gestion_usuarios');
    Route::get('/formulario', [AdminController::class, 'formulario'])->name('admin.Formulario_empleados');
});

// ================= COLABORADOR =================
Route::prefix('colab')->group(function () {
    Route::get('/principal', [ColabController::class, 'principal'])->name('colab.principal');
    Route::get('/gestion', [ColabController::class, 'gestion'])->name('colab.gestion_clases');
    Route::get('/inscripcion', [ColabController::class, 'inscripcion'])->name('colab.inscripcion');
    Route::get('/reportes', [ColabController::class, 'reportes'])->name('colab.reportes');
});

// Ruta adicional para compatibilidad
Route::get('/colaboradores/inicio', [ColabController::class, 'principal'])->name('colaboradores.inicio');

// ================= INSTRUCTOR =================
Route::prefix('inst')->group(function () {
    Route::get('/principal', [InstructorController::class, 'principal'])->name('inst.principal');
    Route::get('/horario', [InstructorController::class, 'horario'])->name('inst.horarios');
});

// Rutas para instructores
Route::resource('instructores', InstructorController::class);
Route::get('/instructores/{id}/edit', [InstructorController::class, 'edit'])->name('instructores.edit');
Route::put('/instructores/{id}', [InstructorController::class, 'update'])->name('instructores.update');
Route::post('/colaboradores/instructores', [InstructorController::class, 'store'])->name('instructores.store');
Route::get('/colaboradores/instructores', [InstructorController::class, 'index'])->name('instructores.index');
Route::get('/colaborador/inicio', [InstructorController::class, 'index'])->name('colaborador.inicio');

// ================= HORARIOS =================
Route::get('/gestion_clases/principal', [HorarioController::class, 'mostrarPrincipal'])->name('gestion_clases.principal');
Route::get('/colab/horarios/crear', [HorarioController::class, 'create'])->name('horarios.create');
Route::post('/colab/horarios', [HorarioController::class, 'store'])->name('horarios.store');
Route::get('/horarios/{horario}/edit', [HorarioController::class, 'edit'])->name('horarios.edit');
Route::put('/horarios/{horario}', [HorarioController::class, 'update'])->name('horarios.update');
Route::delete('/horarios/{horario}', [HorarioController::class, 'destroy'])->name('horarios.destroy');
Route::get('/horarios/{id}/edit', [HorarioController::class, 'edit'])->name('horarios.edit');
Route::put('/horarios/{id}', [HorarioController::class, 'update'])->name('horarios.update');

// ================= ESTUDIANTES =================
//Route::get('/inscribir', [EstudianteController::class, 'create'])->name('estudiantes.create');
//Route::post('/inscribir', [EstudianteController::class, 'store'])->name('estudiantes.store');
//Route::get('/colab/estudiante/{id}/edit', [EstudianteController::class, 'edit'])->name('colab.estudiantes.edit');
Route::get('/inscripcion_estudiante', [EstudianteController::class, 'index'])->name('estudiantes.index');
Route::post('/inscripcion_estudiante', [EstudianteController::class, 'store'])->name('estudiantes.store');
Route::get('/inscripcion_estudiante/{id}/edit', [EstudianteController::class, 'edit'])->name('estudiantes.edit');
Route::put('/inscripcion_estudiante/{id}', [EstudianteController::class, 'update'])->name('estudiantes.update');
Route::delete('/inscripcion_estudiante/{id}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');

// ================= REPORTES =================
Route::get('/reportes/inscripciones', [ReporteController::class, 'reporteInscripciones'])->name('reportes.inscripciones');










//Route::get('/', function () {
    //return view('iniciosportzone.principal');
//});


//Auth::routes();

//Route::middleware(['auth'])->group(function () {
  //  Route::get('/admin/principal', function () {
    //    return view('administrador.admin.principal');
    //})->name('admin.dashboard');
    
//    Route::get('/colaborador/principal', function () {
//        return view('colaborador.inicio_colab.principal');
//    })->name('colaborador.dashboard');
    
//    Route::get('/instructor/principal', function () {
//        return view('instructor.inicio.principal');
//    })->name('instructor.dashboard');
    
    // Ruta home por defecto (puedes eliminarla si no la necesitas)
//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//});

//Route::prefix('admin')->group(function() {
  //  Route::get('/principal', [AdminController::class, 'principal'])->name('admin.principal');
//});

//Route::prefix('admin')->group(function() {
   // Route::get('/gestion', [AdminController::class, 'gestion'])->name('admin.Gestion_usuarios');
//});

//Route::prefix('admin')->group(function() {
//    Route::get('/formulario', [AdminController::class, 'formulario'])->name('admin.Formulario_empleados');
//});

  //reportes

//Route::middleware(['auth'])->group(function () {
 //   Route::get('/reportes/inscripciones', [ReporteController::class, 'reporteInscripciones'])->name('reportes.inscripciones');
//});

//<<<<<<< HEAD
//<<<<<<< HEAD
//<<<<<<< Updated upstream
//Route::get('/', function () {
  // return view('colaborador.reportes.principal');
////});




//Route::prefix('colab')->group(function() {
    Route::get('/principal', [ColabController::class, 'principal'])->name('colab.principal');
//});
//Route::prefix('colab')->group(function() {
 //   Route::get('/gestion', [ColabController::class, 'gestion'])->name('colab.gestion_clases');
//<<<<<<< HEAD
//<<<<<<< HEAD
//});

//Route::prefix('colab')->group(function() {
 //   Route::get('/inscripcion', [ColabController::class, 'inscripcion'])->name('colab.inscripcion');

//});

//Route::prefix('colab')->group(function() {
 //   Route::get('/reportes', [ColabController::class, 'reportes'])->name('colab.reportes');
//});
//>>>>>>> a664ae12ace56ecd4a2473d06be8c7e0962066cb


//RUTAS DEL INSTRUCTOR

//Route::prefix('inst')->group(function() {
  //  Route::get('/principal', [InstructorController::class, 'principal'])->name('inst.principal');
//});

//Route::prefix('inst')->group(function() {
 //   Route::get('/horario', [InstructorController::class, 'horario'])->name('inst.horarios');
//});



//Route::post('/colaboradores/instructores', [InstructorController::class, 'store'])->name('instructores.store');
//Route::get('/colaboradores/instructores', [InstructorController::class, 'index'])->name('instructores.index');
//Route::get('/colaboradores/inicio', [ColabController::class, 'principal'])->name('colaboradores.inicio');
//Route::get('/colaborador/inicio', [InstructorController::class, 'index'])->name('colaborador.inicio');
//Route::resource('instructores', InstructorController::class);
//Route::get('/instructores/{id}/edit', [InstructorController::class, 'edit'])->name('instructores.edit');
//Route::put('/instructores/{id}', [InstructorController::class, 'update'])->name('instructores.update');



//Route::get('/inscribir', [EstudianteController::class, 'create'])->name('estudiantes.create');
//Route::post('/inscribir', [EstudianteController::class, 'store'])->name('estudiantes.store');
//>>>>>>> a664ae12ace56ecd4a2473d06be8c7e0962066cb
//=======
//Route::get('/gestion_clases/principal', [HorarioController::class, 'mostrarPrincipal'])->name('gestion_clases.principal');

//Route::get('/colab/horarios/crear', [HorarioController::class, 'create'])->name('horarios.create');
////Route::post('/colab/horarios', [HorarioController::class, 'store'])->name('horarios.store');


// increipcion estudiante y listaso de inscritos
//Route::prefix('colab')->group(function() {
   //Route::get('/inscripcion', [ColabController::class, 'inscripcion'])->name('colab.inscripcion');
   //Route::get('/inscripcion/listado', [EstudianteController::class, 'index'])->name('estudiantes.index');
   //Route::get('/inscripcion/listado', [EstudianteController::class, 'listado'])->name('colab.inscripcion.listado');
   //Route::get('/colab/estudiantes/{id}/edit', [EstudianteController::class, 'edit'])->name('estudiantes.edit');


//});

//Route::prefix('colab')->group(function() {
   //// Route::get('/reportes', [ColabController::class, 'reportes'])->name('colab.reportes');
//});

//editar y eliminar en horario

//Route::get('/horarios/{horario}/edit', [HorarioController::class, 'edit'])->name('horarios.edit');
//Route::put('/horarios/{horario}', [HorarioController::class, 'update'])->name('horarios.update');
//Route::delete('/horarios/{horario}', [HorarioController::class, 'destroy'])->name('horarios.destroy');



