<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por RouteServiceProvider y todas se asignarán al grupo de middleware "web".
| ¡Haz algo genial!
|
*/

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/signin', [SignController::class, 'showSignIn'])->name('signin.index');
// Ruta para procesar el inicio de sesión
Route::post('/signin', [LoginController::class, 'login'])->name('signin.create');

// Ruta para mostrar el formulario de registro
Route::get('/signup', [SignController::class, 'showSignUp'])->name('signup.index');
// Ruta para procesar el registro
Route::post('/signup', [SignController::class, 'SignUp'])->name('signup.create');

// Ruta para iniciar sesión (ya que se usa tanto en signin como en login, se define una vez aquí)
Route::post('/login', [LoginController::class, 'login'])
    ->middleware('checkEmailAndPassword');

// Ruta para mostrar un error en la página de inicio de sesión
Route::get('/error', function () {
    return "Error d'accés";
})->name('errorAcces.index');

// Rutas relacionadas con el controlador de profesores (TeacherController)
Route::controller(TeacherController::class)->group(function () {
    Route::get('/prof', 'index')->name('prof.index');
    Route::get('/prof/edit/{id}', 'edit')->name('prof.edit');
    Route::get('/prof/create', 'create')->name('prof.create');
    Route::post('/prof', 'store')->name('prof.store');
    Route::put('/prof/{id}', 'update')->name('prof.update');
    Route::delete('prof/{id}', 'destroy')->name('prof.destroy');
});

// Rutas relacionadas con el controlador de alumnos (StudentController)
Route::controller(StudentController::class)->group(function () {
    Route::get('/alum', 'index')->name('alum.index');
    Route::get('/alum/edit/{id}', 'edit')->name('alum.edit');
    Route::get('/alum/create', 'create')->name('alum.create');
    Route::post('/alum', 'store')->name('alum.store');
    Route::put('/alum/{id}', 'update')->name('alum.update');
    Route::delete('alum/{id}', 'destroy')->name('alum.destroy');
});
