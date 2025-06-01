 
 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/', function () {
    return view('colaborador.gestion_clases.principal');
}); 


/*
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*

Route::get('/', function () {
    return view('iniciosportzone.principal');
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Rutas protegidas por auth
|--------------------------------------------------------------------------
*
Route::middleware(['auth'])->group(function () {

    // Dashboard por rol
    Route::get('/admin/principal', [AdminController::class, 'principal'])->name('admin.dashboard');
    Route::get('/colaborador/principal', function () {
        return view('colaborador.inicio_colab.principal');
    })->name('colaborador.dashboard');
    Route::get('/instructor/principal', function () {
        return view('instructor.inicio.principal');
    })->name('instructor.dashboard');

    // Ruta home por defecto
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    /*
    |--------------------------------------------------------------------------
    | Rutas para administrador
    |--------------------------------------------------------------------------
    *
    Route::prefix('admin')->group(function () {
        Route::get('/gestion', [AdminController::class, 'gestion'])->name('admin.Gestion_usuarios');
        Route::get('/formulario', [AdminController::class, 'formulario'])->name('admin.Formulario_empleados');
    });

    /*
    |--------------------------------------------------------------------------
    | Rutas para colaborador (ejemplo para header.blade.php)
    |--------------------------------------------------------------------------
    *
    Route::prefix('colaborador')->group(function () {
        Route::get('/gestion-clases', function () {
            return view('colaborador.gestion_clases.principal');
        })->name('colaborador.gestion_clases');

        Route::get('/inscripcion-estudiantes', function () {
            return view('colaborador.inscripcion_estudiantes.principal');
        })->name('colaborador.inscripcion_estudiantes');

        Route::get('/reportes', function () {
            return view('colaborador.reportes.principal');
        })->name('colaborador.reportes');
    });
});

*/
