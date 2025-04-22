<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerShop;
use App\Http\Controllers\ControllerTutor;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/petshop',action: [ControllerShop::class, 'index'])->name(name: 'petshop.index');

Route::get('/petshop/create', [ControllerShop::class, 'create'])->name('petshop.create');

Route::post('/petshop',[ControllerShop::class, 'store'])->name('petshop.store');

Route::get('/petshop/{animal}/edit',action: [ControllerShop::class, 'edit'])->name('petshop.edit');

Route::put('/petshop/{animal}',action: [ControllerShop::class, 'update'])->name('petshop.update');

Route::get('/petshop/{animal}',[ControllerShop::class, 'show'])->name('petshop.show');

Route::delete('/petshop/{animal}',[ControllerShop::class, 'destroy'])->name('petshop.destroy');

// tutores:



Route::get('/tutores',action: [ControllerTutor::class, 'index'])->name(name: 'tutores.index');

Route::get('/tutores/create', [ControllerTutor::class, 'create'])->name('tutores.create');

Route::post('/tutores',[ControllerTutor::class, 'store'])->name('tutores.store');

Route::get('/tutores/{tutor}/edit',action: [ControllerTutor::class, 'edit'])->name('tutores.edit');

Route::put('/tutores/{tutor}',action: [ControllerTutor::class, 'update'])->name('tutores.update');

Route::get('/tutores/{tutor}',[ControllerTutor::class, 'show'])->name('tutores.show');

Route::delete('/tutores/{tutor}',[ControllerTutor::class, 'destroy'])->name('tutores.destroy');