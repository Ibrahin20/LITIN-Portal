<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/la-institucion', function () {
    return view('institucion');
});

Route::get('/primaria', function () {
    return view('oferta.primaria');
});

Route::get('/media-general', function () {
    return view('oferta.media');
});

Route::get('/bienestar-estudiantil', function () {
    return view('departamentos.bienestar');
});

Route::get('/testimonios', function () {
    return view('testimonios');
});

Route::get('/la-institucion', function () {
    return view('la-institucion'); 
});

Route::get('/primaria', function () {
    return view('primaria');
});

Route::get('/media-general', function () {
    return view('media-general');
});

Route::get('/admision', function () {
    return view('admision');
});

Route::get('/administracion', function () {
    return view('departamentos.administracion');
});

Route::get('/deporte-recreacion', function () {
    return view('departamentos.deporte-recreacion');
});

Route::get('/cultura', function () {
    return view('departamentos.cultura');
});

Route::get('/escuela-para-padres', function () {
    return view('departamentos.escuela-para-padres');
});