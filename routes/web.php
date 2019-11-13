<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rota de Home Externo ==================================================
Route::group(['namespace' => 'Home'], function(){

    Route::get('/', 'HomeController@index')->name('home.index');

});

// Rotas de autenticação geradas automaticamente ===============================================
Auth::routes();

Route::get('/teste', function () {
    return view('auth.loginNew');
});

Route::group(['namespace' => 'Dashboard'], function (){

    // Painel de Controle - Dahsboard =====================================================================
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

    // Usuários - index ===================================================================================
    Route::get('/dashboard/users', 'UserController@index')->name('dashboard.users');

});


Route::group(['middleware' => ['auth'], 'namespace'=> 'Dashboard', 'prefix' => 'dashboard/collaborators'], function(){

    Route::get('/index', 'CollaboratorController@index')->name('collaborators.index');
    Route::get('/show/{id}', 'CollaboratorController@show')->name('collaborator.show');
    Route::get('/create', 'CollaboratorController@create')->name('collaborator.create');
    Route::post('/store', 'CollaboratorController@store')->name('collaborator.store');
    Route::get('/{id}/edit', 'CollaboratorController@edit')->name('collaborator.edit');
    Route::put('/update/{id}', 'CollaboratorController@update')->name('collaborator.update');
    Route::get('/destroy/{id}', 'CollaboratorController@destroy')->name('collaborator.destroy');
    Route::any('/search', 'CollaboratorController@search')->name('collaborator.search');
});

Route::group(['middleware' => ['auth'], 'namespace'=> 'Dashboard', 'prefix' => 'dashboard/procedures'], function(){

    Route::get('/index', 'ProcedureController@index')->name('procedures.index');
    Route::get('/show/{id}', 'ProcedureController@show')->name('procedure.show');
    Route::get('/create', 'ProcedureController@create')->name('procedure.create');
    Route::post('/store', 'ProcedureController@store')->name('procedure.store');
    Route::get('/{id}/edit', 'ProcedureController@edit')->name('procedure.edit');
    Route::put('/update/{id}', 'ProcedureController@update')->name('procedure.update');
    Route::get('/destroy/{id}', 'ProcedureController@destroy')->name('procedure.destroy');
    Route::any('/search', 'ProcedureController@search')->name('procedure.search');
});

Route::group(['middleware' => ['auth'], 'namespace'=> 'Dashboard', 'prefix' => 'dashboard/patients'], function(){

    Route::get('/index', 'PatientController@index')->name('patients.index');
    Route::get('/show/{id}', 'PatientController@show')->name('patient.show');
    Route::get('/create', 'PatientController@create')->name('patient.create');
    Route::post('/store', 'PatientController@store')->name('patient.store');
    Route::get('/{id}/edit', 'PatientController@edit')->name('patient.edit');
    Route::put('/update/{id}', 'PatientController@update')->name('patient.update');
    Route::get('/destroy/{id}', 'PatientController@destroy')->name('patient.destroy');
    Route::any('/search', 'PatientController@search')->name('patient.search');
});


// Route::get('/', 'Home\HomeController@index')->name('home.index');
// Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard.index');
// Route::get('/dashboard/users', 'Dashboard\DashboardController@usersIndex')->name('dashboard.users');
