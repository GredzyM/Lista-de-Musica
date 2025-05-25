# Lista de Músicas - Aplicación Laravel

Una aplicación web desarrollada con Laravel para mostrar una colección de música, artistas y géneros musicales.

## Características

- 🎵 Lista completa de canciones con detalles
- 👨‍🎤 Vista de artistas con sus canciones más populares
- 🎸 Categorización por géneros musicales
- 🎨 Diseño moderno y responsivo con tema en tonos pastel
- 🖼️ Manejo de imágenes con fallback automático

## Requisitos

- PHP >= 8.0
- Composer
- MySQL/MariaDB
- Node.js y NPM (para los assets)

## Instalación

1. Clonar el repositorio:
```bash
git clone [url-del-repositorio]
```

2. Instalar dependencias de PHP:
```bash
composer install
```

3. Copiar el archivo de configuración:
```bash
cp .env.example .env
```

4. Generar la clave de la aplicación:
```bash
php artisan key:generate
```

5. Configurar la base de datos en el archivo .env

6. Ejecutar las migraciones y seeders:
```bash
php artisan migrate --seed
```

## Uso

Para iniciar el servidor de desarrollo:
```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`

## Estructura

- `app/Models/Musica.php` - Modelo para las canciones
- `database/seeders/MusicaSeeder.php` - Seeder con datos de ejemplo
- `resources/views/musicas/` - Vistas de la aplicación
  - `index.blade.php` - Vista principal
  - `artistas.blade.php` - Vista de artistas
  - `generos.blade.php` - Vista de géneros

## Contribuir

Las contribuciones son bienvenidas. Por favor, abre un issue primero para discutir los cambios que te gustaría hacer.

## Licencia

[MIT](https://opensource.org/licenses/MIT)
