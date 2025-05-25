<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;

Route::get('/musicas', [MusicaController::class, 'index'])->name('musicas.index');
Route::get('/musicas/{id}', [MusicaController::class, 'show'])->name('musicas.show');
Route::get('/generos', [MusicaController::class, 'generos'])->name('musicas.generos');
Route::get('/artistas', [MusicaController::class, 'artistas'])->name('musicas.artistas');

Route::get('/', function () {
    return redirect()->route('musicas.index');
});
