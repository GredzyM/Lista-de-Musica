<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicApp - Tu Biblioteca Musical</title>
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
        .music-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .music-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .image-container {
            position: relative;
            overflow: hidden;
        }
        .image-container img {
            transition: transform 0.3s ease;
        }
        .music-card:hover .image-container img {
            transform: scale(1.05);
        }
        .play-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .music-card:hover .play-overlay {
            opacity: 1;
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
        <!-- Encabezado con estadísticas -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold mb-4" style="color: var(--color-text);">🎵 Biblioteca Musical</h1>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <p class="text-2xl font-bold" style="color: var(--color-accent);">{{ $musicas->total() }}</p>
                    <p class="text-gray-600">Canciones</p>
                </div>
                <div>
                    <p class="text-2xl font-bold" style="color: var(--color-accent);">{{ $musicas->unique('artista')->count() }}</p>
                    <p class="text-gray-600">Artistas</p>
                </div>
                <div>
                    <p class="text-2xl font-bold" style="color: var(--color-accent);">{{ $musicas->unique('genero')->count() }}</p>
                    <p class="text-gray-600">Géneros</p>
                </div>
            </div>
        </div>

        <!-- Grid de canciones -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($musicas as $musica)
                <div class="music-card bg-white rounded-lg overflow-hidden">
                    <div class="image-container h-48">
                        <img src="{{ $musica->imagen }}" 
                             alt="{{ $musica->titulo }}" 
                             class="w-full h-full object-cover"
                             onerror="this.src='/images/default-album.jpg'">
                        <div class="play-overlay">
                            <a href="{{ route('musicas.show', $musica->id) }}" 
                               class="text-white hover:text-gray-200 transition">
                                <i class="fas fa-play-circle text-4xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-1 truncate">{{ $musica->titulo }}</h2>
                        <p class="text-gray-600 text-sm mb-2">{{ $musica->artista }}</p>
                        <div class="flex justify-between items-center text-sm">
                            <span class="px-2 py-1 rounded-full text-xs" 
                                  style="background-color: var(--color-primary); color: var(--color-text);">
                                {{ $musica->genero }}
                            </span>
                            <span class="text-gray-500">{{ $musica->anio }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Paginación -->
        <div class="mt-8">
            {{ $musicas->links() }}
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
