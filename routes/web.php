<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;


// Ver detalles de cada planta
Route::get('/plants/search/{id}', [PlantController::class, 'searchShow'])->name('plants.searchShow');


// ruta que contiene el acceso a el creado de plantas 
Route::resource('plants', PlantController::class);

// Ruta de biblioteca
Route::get('/biblioteca', function () {
    return view('biblioteca');
});

// mostrar detalles de la planta de las card
Route::get('/plants/{id}/details', [PlantController::class, 'details'])->name('plants.details');

Route::get('/search_show', [PlantController::class, 'searchShow'])->name('plants.search_show');

Route::get('/search/autocomplete', [SearchController::class, 'autocomplete'])->name('search.autocomplete');
Route::get('/search/popular', [SearchController::class, 'popular'])->name('search.popular');
// Route::get('/plant/details/{id}', [PlantController::class, 'details'])->name('plant.details');
// Route::get('/plant/details/{id}', [PlantController::class, 'showDetails'])->name('plant.details');
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la página de contáctanos
Route::get('/contactanos', function () {
    return view('contactanos');
});

// Ruta para manejar el envío del formulario de contacto
Route::post('/enviar-contacto', [ContactController::class, 'enviarContacto']);

// Ruta para la página "Nosotros"
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// Ruta protegida para la página principal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


// Rutas para las plantas
Route::middleware('auth')->group(function () {
    // Ruta de configuracion
    Route::get('/configuracion', [ConfigController::class, 'index'])->name('config.index');
    Route::post('/configuracion', [ConfigController::class, 'update'])->name('config.update');

    // Rutas de registro protegida para el usuario
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [UserController::class, 'register']);

   // Ruta protegida del dashboard de plantas
   
   Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
   Route::get('/plants/create', [PlantController::class, 'create'])->name('plants.create');
   Route::post('/plants', [PlantController::class, 'store'])->name('plants.store'); // Ruta para almacenar la planta
   Route::get('/plants/{id}', [PlantController::class, 'show'])->name('plants.show');
   Route::get('/plants/{id}/edit', [PlantController::class, 'edit'])->name('plants.edit');
   Route::put('/plants/{id}', [PlantController::class, 'update'])->name('plants.update');
   Route::delete('/plants/{id}', [PlantController::class, 'destroy'])->name('plants.destroy');
   Route::post('/filter', [PlantController::class, 'filterByDisease'])->name('plants.filterByDisease');
   Route::get('/plants/filterByDisease', [PlantController::class, 'filterByDisease'])->name('plants.filterByDisease');
   Route::get('/filter', [PlantController::class, 'showFilterForm'])->name('filter.form');
   Route::get('/plants/search', [PlantController::class, 'search'])->name('plants.search');
});

// Rutas para la autenticación de usuarios
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Autenticación de Laravel
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
