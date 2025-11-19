<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\CobroController;
use App\Http\Controllers\PagoController;

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

//Spatie
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuario', UsuarioController::class);
});

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/error', function () {
    abort(500);
}); 

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

Route::get('/filtroasig', [App\Http\Controllers\DashboardController::class, 'filtroasig'] )->name('filtroasig');
Route::get('/filtroruta', [App\Http\Controllers\DashboardController::class, 'filtroruta'] )->name('filtroruta');
Route::get('/filtroentregado', [App\Http\Controllers\DashboardController::class, 'filtroentregado'] )->name('filtroentregado');
Route::get('/filtrofallido', [App\Http\Controllers\DashboardController::class, 'filtrofallido'] )->name('filtrofallido');
Route::get('/filtronoentregado', [App\Http\Controllers\DashboardController::class, 'filtronoentregado'] )->name('filtronoentregado');
Route::get('/filtroreprogramado', [App\Http\Controllers\DashboardController::class, 'filtroreprogramado'] )->name('filtroreprogramado');
Route::get('/filtrocambio', [App\Http\Controllers\DashboardController::class, 'filtrocambio'] )->name('filtrocambio');
Route::get('/cambiando', [App\Http\Controllers\DashboardController::class, 'cambiando'] )->name('cambiando');

Route::get('/detalles/{id}', [App\Http\Controllers\DashboardController::class, 'detalles'] )->name('detalles');
Route::get('/cambiarruta/{id}', [App\Http\Controllers\DashboardController::class, 'cambiarruta'] )->name('cambiarruta');
Route::get('/cambiarentregado/{id}', [App\Http\Controllers\DashboardController::class, 'cambiarentregado'] )->name('cambiarentregado');
Route::get('/cambiarfallido', [App\Http\Controllers\DashboardController::class, 'cambiarfallido'] )->name('cambiarfallido');
Route::get('/cambiarnoentre', [App\Http\Controllers\DashboardController::class, 'cambiarnoentre'] )->name('cambiarnoentre');
Route::get('/cambiarreprogra', [App\Http\Controllers\DashboardController::class, 'cambiarreprogra'] )->name('cambiarreprogra');


//usuarios
//Route::get('/usuarios/lista', [App\Http\Controllers\DashboardController::class, 'usuarios'] )->name('indexuser') ;

Route::get('/usuarios/lista', [App\Http\Controllers\UsuarioController::class, 'index'] )->name('indexuser') ;
Route::get('/guardaruser', [App\Http\Controllers\UsuarioController::class, 'guardaru'] )->name('guardaru') ;


Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
Route::post('/cambiar-estado', [EnvioController::class, 'cambiarEstado'])->name('cambiar.estado');
Route::get('/entregarenvio', [EnvioController::class, 'entregarenvio'])->name('entregarenvio');
Route::get('/envio/buscar', [EnvioController::class, 'buscar'])->name('producto.buscar');
Route::post('/guardar-comprobante', [EnvioController::class, 'guardarComprobante'])->name('guardarComprobante');
Route::post('/guardandocambio', [EnvioController::class, 'guardandocambio'])->name('envios.cambio');
Route::post('/envios/cambio', [App\Http\Controllers\EnvioController::class, 'guardarCambio'])->name('envios.cambio');
Route::post('/envios/guardar-entrega', [EnvioController::class, 'guardarEntrega'])->name('envios.guardarentrega');

Route::get('/entregarenlote', [EnvioController::class, 'entregarenlote'])->name('entregarenlote');

Route::post('/envios/entregarlote', [EnvioController::class, 'guardarLote'])->name('envios.guardarLote');
Route::get('/envio/buscar/{guia}', [EnvioController::class, 'buscarEnvio']);


//Caja
Route::get('/caja/cajero', [App\Http\Controllers\CajaController::class, 'cajero'] )->name('cajero') ;
Route::get('/caja/jefe', [App\Http\Controllers\CajaController::class, 'jefe'] )->name('jefe') ;
Route::get('/caja/guardar', [App\Http\Controllers\CajaController::class, 'store'])->name('caja.store');
Route::get('/caja/listado/{id}', [App\Http\Controllers\CajaController::class, 'listado'])->name('caja.listado');
Route::get('/caja/listadofiltro', [App\Http\Controllers\CajaController::class, 'listadofiltro'])->name('caja.listadofiltro');
Route::get('/caja/ajustes', [App\Http\Controllers\CajaController::class, 'ajustes'] )->name('ajustes') ;
Route::get('/caja/guardarconcepto', [App\Http\Controllers\CajaController::class, 'guardarconcepto'] )->name('guardarconcepto') ;

Route::get('/caja/editar/{id}', [App\Http\Controllers\CajaController::class, 'editar'])->name('caja.editar');
Route::get('/caja/eliminar/{id}', [App\Http\Controllers\CajaController::class, 'eliminar'])->name('caja.eliminar');
Route::get('/caja/editandoconcepto', [App\Http\Controllers\CajaController::class, 'editandoconcepto'])->name('caja.editandoconcepto');
Route::get('/caja/exportarticket/{id}', [App\Http\Controllers\CajaController::class, 'exportarticket'])->name('caja.exportarticket');
Route::get('/caja/exportarpdf/{id}', [App\Http\Controllers\CajaController::class, 'exportarpdf'])->name('caja.exportarpdf');
Route::get('/caja/exportarexcel/{id}', [App\Http\Controllers\CajaController::class, 'exportarExcel'])->name('caja.exportarExcel');


//Cobro
Route::get('/cobro/cobrar', [App\Http\Controllers\CobroController::class, 'cobro'] )->name('cobro') ;
Route::post('/cobro/buscar', [App\Http\Controllers\CobroController::class, 'buscar'] )->name('cobro.buscar') ;

Route::post('/envios/guardarQR', [EnvioController::class, 'guardarQR'])->name('envios.guardarQR');


Route::post('/cobros/cobrar', [CobroController::class, 'cobrar'])->name('cobros.cobrar');

Route::post('/verificar-guia', [EnvioController::class, 'verificarGuia'])->name('envios.verificar');
Route::get('/cobros/ticket/{id}', [CobroController::class, 'verTicket'])->name('cobros.ticket');


//Pagar

Route::get('/pago/pagar', [App\Http\Controllers\PagoController::class, 'pagar'] )->name('pagar') ;
Route::post('/pagar/verificar', [PagoController::class, 'verificar'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class)
    ->name('pagar.verificar');

Route::get('/pagar/buscar', [PagoController::class, 'buscar'])
    ->name('pagar.buscar');


//No entregados
Route::get('/envios/noentregados', [EnvioController::class, 'noentregados'])->name('envios.noentregados');

// Verificar si un envío existe por QR
Route::post('/noentregados/verificar', [App\Http\Controllers\EnvioController::class, 'verificar'])
    ->name('noentregado.verificar');

// Actualizar lote
Route::post('/noentregados/actualizar', [App\Http\Controllers\EnvioController::class, 'actualizarLote'])
    ->name('noentregado.actualizar');

    

Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    
    return redirect('/login');
})->name('logout');


Route::view('/bienvenida', '/pages/dashboards/inicio')->name('bienvenida');

require __DIR__.'/auth.php';
