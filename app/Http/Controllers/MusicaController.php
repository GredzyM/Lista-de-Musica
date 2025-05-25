<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    // Mostrar lista de músicas (50 por página)
    public function index(Request $request)
    {
        $query = Musica::query();

        // Filtrar por género si se especifica
        if ($request->has('genero')) {
            $query->where('genero', $request->genero);
        }

        // Filtrar por artista si se especifica
        if ($request->has('artista')) {
            $query->where('artista', $request->artista);
        }

        $musicas = $query->paginate(50)->withQueryString();

        // Obtener lista única de géneros y artistas para los filtros
        $generos = Musica::distinct()->pluck('genero');
        $artistas = Musica::distinct()->pluck('artista');

        return view('musicas.index', compact('musicas', 'generos', 'artistas'));
    }

    // Mostrar detalle de una música
    public function show($id)
    {
        $musica = Musica::findOrFail($id);
        return view('musicas.show', compact('musica'));
    }

    // Mostrar lista de géneros
    public function generos()
    {
        $musicas = Musica::all();
        $generos = $musicas->pluck('genero')->unique()->sort()->values();
        return view('musicas.generos', compact('generos', 'musicas'));
    }

    // Mostrar lista de artistas
    public function artistas()
    {
        $musicas = Musica::all();
        $artistas = $musicas->pluck('artista')->unique()->sort()->values();
        return view('musicas.artistas', compact('artistas', 'musicas'));
    }
}
