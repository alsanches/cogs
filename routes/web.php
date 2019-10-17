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
    Route::get('/dashboard/users', 'UsersController@index')->name('dashboard.users');

    // Colaboradores - index ===================================================================================
    Route::get('/dashboard/collaborators', 'CollaboratorsController@index')->name('dashboard.collaborators');

});

// Route::get('/', 'Home\HomeController@index')->name('home.index');
// Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard.index');
// Route::get('/dashboard/users', 'Dashboard\DashboardController@usersIndex')->name('dashboard.users');
