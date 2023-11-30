<?php

use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
// Ruta para la vista de inicio
Route::get('/', function () {
    return view('welcome');
});
// los parametros van en el controlador
// Escribimos el return
// Ruta SingIn
Route::get('/jostin/signin', [SignController::class, 'showSignIn']);

// Ruta SignUp
Route::get('/marc/signup', [SignController::class, 'showSignUp']);

// Mostramos si hay un error
Route::get('/error', function (){
    return ("Error d'accés.");
})->name('errorAcces.index');

Route::post('/login', function () {
        $email = request('email');
        $password = request('password');
});
Route::get('/mostrar/{check}', function ($check){
    return ("Has accedit correctament a aquesta ruta.");
})->name('check');
Route::post('/mostrar',function (Request $request){
    $email = $request->email;
    return "El meu email es " . $email  ;
})
