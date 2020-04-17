<?php
//======================================================================================//
//===============================Escuelas===============================================//
//======================================================================================//
//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//======================================================================================//
//===============================N E G O C I O S========================================//
//======================================================================================//
Route::resource('negocios', 'NegociosController');
Route::resource('aguacate', 'AguacateController');
Route::resource('ropa', 'RopaController');

//======================================================================================//
//===============================E S C U E L A==========================================//
//======================================================================================//

Route::resource('controlEscolar', 'ControlEscolarController');
Route::resource('baseDeDatos', 'BaseDeDatosController');
Route::resource('calificaciones', 'CalificacionesController');
Route::resource('colegiaturas', 'ColegiaturasController');
Route::resource('certificaciones', 'CertificacionesController');
Route::resource('bajas', 'BajasController');
Route::resource('clientePrueba', 'ClientePruebaController');
Route::get('getPdf/{id}/{status}', 'CalificacionesController@getPdf');


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
