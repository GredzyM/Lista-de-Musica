<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas - MusicApp</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --color-primary: #F2D4C2;
            --color-secondary: #E6B0AA;
            --color-accent: #D4A5A5;
            --color-background: #FAF3F0;
            --color-text: #8B7355;
        }
        body { 
            background-color: var(--color-background);
            min-height: 100vh;
        }
        .nav-link {
            position: relative;
            color: var(--color-text);
            text-decoration: none;
            padding-bottom: 2px;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--color-accent);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .artist-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .artist-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .image-container {
            position: relative;
            padding-bottom: 100%; /* Aspecto cuadrado */
            overflow: hidden;
        }
        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navegación -->
    <nav class="bg-white shadow-lg mb-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-music text-2xl" style="color: var(--color-accent);"></i>
                    <span class="text-xl font-bold" style="color: var(--color-text);">MusicApp</span>
                </div>
                <div class="flex space-x-6">
                    <a href="{{ route('musicas.index') }}" class="nav-link">Inicio</a>
                    <a href="{{ route('musicas.generos') }}" class="nav-link">Géneros</a>
                    <a href="{{ route('musicas.artistas') }}" class="nav-link">Artistas</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4">
        <!-- Encabezado -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold mb-4" style="color: var(--color-text);">🎤 Artistas</h1>
            <p class="text-gray-600">Explora nuestra colección de {{ count($artistas) }} artistas destacados</p>
        </div>

        <!-- Grid de artistas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($artistas as $artista)
                @php
                    $artistaCanciones = $musicas->where('artista', $artista);
                    $primeraCancion = $artistaCanciones->first();
                @endphp
                <div class="artist-card bg-white rounded-lg overflow-hidden">
                    <div class="image-container">
                        <img src="{{ $primeraCancion->imagen }}" 
                             alt="{{ $artista }}" 
                             class="w-full h-full object-cover"
                             onerror="this.onerror=null; this.src='/images/default-album.jpg';">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end">
                            <div class="p-4 w-full">
                                <h2 class="text-white text-xl font-bold truncate">{{ $artista }}</h2>
                                <p class="text-white text-sm opacity-80">{{ $artistaCanciones->count() }} canciones</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="space-y-2">
                            @foreach($artistaCanciones->take(3) as $cancion)
                                <div class="flex items-center justify-between">
                                    <span class="text-sm truncate flex-1">{{ $cancion->titulo }}</span>
                                    <span class="text-xs text-gray-500">{{ $cancion->anio }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-xs px-2 py-1 rounded-full" 
                                  style="background-color: var(--color-primary); color: var(--color-text);">
                                {{ $artistaCanciones->first()->genero }}
                            </span>
                            <a href="#" class="text-sm hover:underline" style="color: var(--color-text);">
                                Ver todas
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-16 py-8" style="background-color: var(--color-primary);">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm" style="color: var(--color-text);">
                © {{ date('Y') }} MusicApp - Tu biblioteca musical favorita
            </p>
        </div>
    </footer>
</body>
</html> 