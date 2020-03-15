<?php


//======================================================================================//
//===============================FORMATOWEB=============================================//
//======================================================================================//

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('welcome', function () {
    return view('pages.welcome');
});

Route::get('mantenimiento', function () {
    return view('pages.mantenimiento');
});

Route::get('programacion', function () {
    return view('pages.programacion');
});

Route::get('paginasWeb', function () {
    return view('pages.paginasWeb');
});

Route::get('contacto', function () {
    return view('pages.contacto');
});
