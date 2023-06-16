<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



//Auth::routes();
Auth::routes(["register" => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::prefix('admin')->middleware(['auth'])->group(function () {

        Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'inicio']);

        //Rutas de las Categorias
        Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
            Route::get('/category', 'index')->name("categorias.index");
            Route::get('/category/create', 'create');
            Route::post('/category', 'store');
            Route::get('/category/{category}/edit', 'edit');
            Route::put('/category/{category}', 'update');
            Route::get('/category/{category_id}/delete', 'destroy');
            Route::get('/category/showcategoryrestore', 'showcategoryrestore');
            Route::get('/category/restaurar/{idregistro}', 'restaurar');
        });
        //Rutas de los Productos
        Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
            Route::get('/products', 'index')->name('producto.index');
            Route::get('/products/create', 'create');
            Route::post('/products', 'store');
            Route::get('/products/{product}/edit', 'edit');
            Route::put('/products/{product}', 'update');
            Route::get('/products/{product_id}/delete', 'destroy');
            Route::get('/products/show/{id}', 'show'); //ver  
            Route::get('/products/showrestore', 'showrestore');
            Route::get('/products/restaurar/{idregistro}', 'restaurar');
        });
        //Rutas de los Kits
        Route::controller(App\Http\Controllers\Admin\DetallekitController::class)->group(function () {
            Route::get('/kits', 'index')->name('kit.index');
            Route::get('/kits/create', 'create');
            Route::post('/kits', 'store');
            Route::get('/kits/{kit_id}/edit', 'edit');
            Route::put('/kits/{kit_id}', 'update');
            Route::get('/kits/{kit_id}/delete', 'destroy');
            Route::get('/kits/show/{kit_id}', 'show'); //ver   
            Route::get('/deletedetallekit/{id}', 'destroydetallekit');
            Route::get('/kits/showrestore', 'showrestore');
            Route::get('/kits/restaurar/{idregistro}', 'restaurar');
        });
        //Ruta de los Usuarios
        Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
            Route::get('/users', 'index')->name('usuario.index');
            Route::get('/users/create', 'create');
            Route::post('/users', 'store');
            Route::get('/users/{user_id}/edit', 'edit');
            Route::put('/users/{user_id}', 'update');
            Route::get('/users/{user_id}/delete', 'destroy');
        });
        //rutas de los roles
        Route::controller(App\Http\Controllers\Admin\RolController::class)->group(function () {
            Route::get('/rol', 'index')->name('rol.index');
            Route::get('/rol/create', 'create');
            Route::post('/rol', 'store');
            Route::get('/rol/{cliente}/edit', 'edit');
            Route::put('/rol/{cliente}', 'update');
            Route::get('/rol/{product_id}/delete', 'destroy');
        });
        //rutas de los historiales
        Route::controller(App\Http\Controllers\Admin\HistorialController::class)->group(function () {
            Route::get('/historial', 'index')->name('historial.index');
            Route::get('/historial/{historial_id}/delete', 'destroy');
            Route::get('/historial/limpiartabla', 'limpiartabla');
        });
    });
});
