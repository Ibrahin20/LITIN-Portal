<?php

use Illuminate\Support\Facades\Route;

// Ruta de Inicio
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// Rutas Principales
Route::get('/la-institucion', function () {
    return view('la-institucion');
})->name('la-institucion');

Route::get('/testimonios', function () {
    return view('testimonios');
})->name('testimonios');

Route::get('/admision', function () {
    return view('admision');
})->name('admision');

// Rutas de Oferta Académica
Route::get('/primaria', function () {
    return view('primaria');
})->name('primaria');

Route::get('/media-general', function () {
    return view('media-general');
})->name('media-general');

// Rutas de Departamentos
Route::prefix('departamentos')->group(function () {
    Route::get('/escuela-para-padres', function () {
        return view('departamentos.escuela-para-padres');
    })->name('dept.padres');
    
    Route::get('/cultura', function () {
        return view('departamentos.cultura');
    })->name('dept.cultura');

    Route::get('/deporte-recreacion', function () {
        return view('departamentos.deporte-recreacion');
    })->name('dept.deporte');
    
    Route::get('/bienestar', function () {
        return view('departamentos.bienestar');
    })->name('dept.bienestar');

    Route::get('/administracion', function () {
        return view('departamentos.administracion');
    })->name('dept.admin');
}); 