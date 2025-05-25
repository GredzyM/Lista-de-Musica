<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Lista de Músicas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <style>
        :root {
            --color-primary: #F2D4C2;     /* Beige rosado suave */
            --color-secondary: #E6B0AA;   /* Rosa pastel */
            --color-accent: #D4A5A5;      /* Rosa antiguo */
            --color-background: #FAF3F0;  /* Beige muy claro */
            --color-text: #8B7355;        /* Marrón suave */
        }
        .bg-custom-primary { background-color: var(--color-primary); }
        .bg-custom-secondary { background-color: var(--color-secondary); }
        .bg-custom-accent { background-color: var(--color-accent); }
        .text-custom { color: var(--color-text); }
        .hover-custom:hover { background-color: var(--color-secondary); }
    </style>
</head>
<body class="bg-custom-background" style="background-color: var(--color-background);">
    <!-- Navegación -->
    <nav class="bg-custom-primary shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('musicas.index') }}" class="flex items-center space-x-2 text-custom">
                    <i class="fas fa-music text-2xl"></i>
                    <span class="font-bold text-xl">MusicApp</span>
                </a>
                <div class="space-x-4">
                    <a href="{{ route('musicas.index') }}" class="text-custom hover:text-custom-accent transition">Inicio</a>
                    <a href="#" class="text-custom hover:text-custom-accent transition">Géneros</a>
                    <a href="#" class="text-custom hover:text-custom-accent transition">Artistas</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-custom-primary text-custom py-6 mt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <h3 class="text-xl font-bold">MusicApp</h3>
                    <p class="opacity-75">Tu biblioteca musical favorita</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-custom-accent transition"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-custom-accent transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-custom-accent transition"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html> 