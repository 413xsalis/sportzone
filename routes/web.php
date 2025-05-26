<!-- php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); -->
<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::post('/contacto', [HomeController::class, 'contactSubmit'])->name('contact.submit');

// // Ruta de login (puedes implementar Laravel Breeze o Jetstream para autenticación)
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('iniciosportzone.principal');
});
