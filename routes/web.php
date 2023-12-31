<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VentaController;
use App\Http\Middleware\AdminOnly;
use App\Http\Middleware\Inicio;

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

Route::middleware('auth')->group(function() {
    Route::get('producto/descarga/{producto}',[ProductoController::class,'descarga'])->name('producto.descarga');
    Route::resource('producto',ProductoController::class);  
    Route::resource('empleado',EmpleadoController::class);  
    
    Route::resource('categoria', CategoriaController::class)->parameters([
        'categoria' => 'categoria'
    ]);
    Route::get('/papelera_categoria', [CategoriaController::class, 'papelera']);
    Route::post('categoria/{id}/restore', [CategoriaController::class, 'restore'])->name('categoria.restore');

    Route::get('/papelera_empleado', [EmpleadoController::class, 'papelera']);
    Route::post('empleado/{id}/restore', [EmpleadoController::class, 'restore'])->name('empleado.restore');

    Route::get('/papelera_producto', [ProductoController::class, 'papelera']);
    Route::post('producto/{id}/restore', [ProductoController::class, 'restore'])->name('producto.restore');

    Route::post('cliente/{id}/restore', [ClienteController::class, 'restore'])->name('cliente.restore');

    Route::get('/inicio', function () {
        return view('inicio');
    })->middleware(Inicio::class);
    Route::get('/contacto', function () {
        return view('contacto');
    });    
    Route::get('/logproducto', [ProductoController::class, 'log']);

    Route::get('/shop', [CartController::class, 'shop'])->name('shop');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
    Route::post('/add', [CartController::class, 'add'])->name('cart.store');
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::post('/store', [VentaController::class, 'store'])->name('venta.store');
    Route::get('/ventas', [VentaController::class, 'index'])->name('venta.index');
    Route::get('/ventas/{venta}', [VentaController::class, 'show'])->name('venta.show');
    Route::get('/perfil', function () {
        return view('editarPerfil');
    })->middleware(AdminOnly::class);
});
Route::resource('cliente', ClienteController::class);

Route::get('/', function () {
    return view('landing_page');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
