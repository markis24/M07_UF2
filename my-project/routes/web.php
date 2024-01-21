<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta SingIn
Route::get('/signin', [SignController::class, 'showSignIn'])->name('signin.index');
Route::post('/signin', [LoginController::class, 'login'])->name('signin.create');


// Ruta SignUp
Route::get('/signup', [SignController::class, 'showSignUp'])->name('signup.index');
Route::post('/signup', [SignController::class, 'SignUp'])->name('signup.create');


// Ruta para iniciar sesion
Route::post('/login', [LoginController::class, 'login'])
    ->middleware('checkEmailAndPassword');


// Mostramos si hay un error en la pagina de iniciar sesion
Route::get('/error', function () {
    return "Error d'accés";
})->name('errorAcces.index');

Route::controller(TeacherController::class)->group(function () {
    Route::get('/prof', 'index')->name('prof.index');
    Route::get('/prof/edit/{id}', 'edit')->name('prof.edit');
    Route::get('/prof/create', 'create')->name('prof.create');
    Route::post('/prof', 'store')->name('prof.store');
    Route::put('/prof/{id}', 'update')->name('prof.update');
    Route::delete('prof/{id}', 'destroy')->name('prof.destroy');
});

Route::controller(StudentController::class)->group(function () {
});
