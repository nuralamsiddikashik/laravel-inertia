<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get( '/', function () {
    return Inertia::render( 'Welcome', [
        'foo' => 'bar',
    ] );
} );

Route::get( '/about', function () {
    return Inertia::render( 'About', [
        'foo' => 'bar',
    ] );
} );

Route::get( '/contact', function () {
    return Inertia::render( 'Contact', [
        'foo' => 'bar',
    ] );
} );

Route::get( '/leads', [UserController::class, 'index'] )->name( 'leads.index' );
Route::get( '/leads/create', [UserController::class, 'create'] )->name( 'leads.create' );
Route::post( '/leads', [UserController::class, 'store'] )->name( 'leads.store' );
Route::get( '/leads/{lead}/edit', [UserController::class, 'edit'] )->name( 'leads.edit' );
Route::put( '/leads/{lead}', [UserController::class, 'update'] )->name( 'leads.update' );
Route::delete( '/leads/delete/{id}', [UserController::class, 'destroy'] )->name( 'leads.delete' );