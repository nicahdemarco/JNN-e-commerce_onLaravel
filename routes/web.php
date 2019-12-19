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

// Aquí es donde estan todas las rutas que controlan todo el sitio
//Esta es la ruta principal que llama a la página
Route::get('/', 'ProductController@index')->name('main');
//Esta es la ruta lleva al usuario al registro
Route::get('/register', 'ProductController@index')->name('register');
//Esta es la ruta lleva al usuario al logueo
Route::get('/login', 'ProductController@index')->name('login');
//Aquí direcciono al usuario, cuando el da click en Preguntas Frecuentes
Route::get('/faqs', 'PagesController@faqs')->name('faqs');
//Aquí direcciono al usuario, detalle del producto
Route::get('/productDetail/{id}', 'ProductController@productDetail')->name('productDetail');
//Aquí es donde muestros los productos
Route::get('/show/{id}', 'ProductController@show')->name('front.product.show');
//Ruta creada para buscar los productos
Route::get('/search', 'ProductController@search')->name('product.search');  
//Este grupo de rutas controla si el usuario es administrador o no
//Ojo El usuario administrador deben colocarle en la base de datos tabla users, el role 7
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role']], function () {
    Route::resource('/products', 'AdminProductController');
    Route::resource('/users', 'AdminUserController');
});
//Aquí accedo al perfil del usuario para efctuar cualquier ajuste
Route::get('/profile', "UserController@show")->name("profile")->middleware('auth');
// Aquí es donde controlo lo del carrito de compras, agregar productos
Route::get('cart/add/{id}', "CartController@add")->name('cart.add')->middleware('auth');
//Carrito de compras elimino productos 
Route::get('cart/remove/{id}', "CartController@remove")->name('cart.remove')->middleware('auth');
//Muestro los productos del carrito
Route::get('/cart', 'CartController@show')->name('cart')->middleware('auth');
Auth::routes();

//Rutas para el acceso a administrador
Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

    
    Route::get('/edit/{id}', 'UserUpdate@edit')->middleware('auth')->name('edit');
    Route::put('/update/{id}', 'UserUpdate@update')->name('update');