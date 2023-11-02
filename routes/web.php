<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VentaController;

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
    Route::resource('producto',ProductoController::class);  
    Route::resource('empleado',EmpleadoController::class);  
    Route::resource('categoria', CategoriaController::class)->parameters([
        'categoria' => 'categoria'
    ]);
    Route::get('/inicio', function () {
        return view('inicio');
    });
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

});

Route::get('/uwu', function () {
    return view('uwu');
});
Route::get('/iniciocliente', function () {
    return view('landing');
});

Route::get('/', function () {
    return view('landing_page');
});
Route::get('/perfil', function () {
    return view('editarPerfil');
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