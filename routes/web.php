<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('projects', ProjectController::class);

Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/add', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/portfolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portfolio/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/portfolio/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/portfolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/portfolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
