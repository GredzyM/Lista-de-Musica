@extends('layouts.app')

@section('title', $musica->titulo)

@section('content')
    <div class="max-w-4xl mx-auto">
        <a href="{{ route('musicas.index') }}" class="text-indigo-600 hover:text-indigo-800 flex items-center gap-2 mb-6">
            <i class="fas fa-arrow-left"></i>
            <span>Volver a la lista</span>
        </a>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="relative h-96">
                <img src="{{ $musica->imagen }}" alt="Portada de {{ $musica->titulo }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <h1 class="text-4xl font-bold mb-2">{{ $musica->titulo }}</h1>
                    <h2 class="text-2xl opacity-90">{{ $musica->artista }}</h2>
                </div>
            </div>

            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Información de la Canción</h3>
                        <div class="space-y-3">
                            <p class="flex items-center gap-2">
                                <i class="fas fa-music text-indigo-600"></i>
                                <span class="font-medium">Género:</span> 
                                <span class="text-gray-600">{{ $musica->genero }}</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fas fa-compact-disc text-indigo-600"></i>
                                <span class="font-medium">Álbum:</span>
                                <span class="text-gray-600">{{ $musica->album }}</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fas fa-calendar text-indigo-600"></i>
                                <span class="font-medium">Año:</span>
                                <span class="text-gray-600">{{ $musica->anio }}</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fas fa-clock text-indigo-600"></i>
                                <span class="font-medium">Duración:</span>
                                <span class="text-gray-600">{{ intdiv($musica->duracion, 60) }}:{{ str_pad($musica->duracion % 60, 2, '0', STR_PAD_LEFT) }} minutos</span>
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-4">Acciones</h3>
                        <div class="space-y-4">
                            <button class="w-full bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-play"></i>
                                <span>Reproducir</span>
                            </button>
                            <button class="w-full border border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg hover:bg-indigo-50 transition flex items-center justify-center gap-2">
                                <i class="fas fa-plus"></i>
                                <span>Agregar a playlist</span>
                            </button>
                            <button class="w-full border border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg hover:bg-indigo-50 transition flex items-center justify-center gap-2">
                                <i class="fas fa-share"></i>
                                <span>Compartir</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
