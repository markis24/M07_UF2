<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignController;
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
Route::get('/signin', [SignController::class, 'showSignIn'])->name('Sign In');

// Ruta SignUp
Route::get('/signup', [SignController::class, 'showSignUp'])->name('Sign Up');

// Ruta para iniciar sesion
Route::post('/login', [LoginController::class, 'login'])
->middleware('checkEmailAndPassword');


// Mostramos si hay un error en la pagina de iniciar sesion
Route::get('/error', function () {
    return "Error d'accés";
})->name('errorAcces.index');
