<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//////////////////////////////////////
Route::get('tarea', function () {
    return view('lista-tareas');
});

Route::get('tarea/crear', function () {
    return view('crear-tarea');
});


Route::post('tarea/crear', function (Request $request) {
   
    //dd($request->all(),$request->titulo, $request->descripcion);
    //Recibir informacion del formulario


    //Validar la informacion


    //Guardar la informacion en la base de datos



    //return 'Tarea Creada';
});

//////////////////////////////////////
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');
});

require __DIR__.'/auth.php';
