<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Musica;

class MusicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Array de URLs de imágenes de respaldo por artista
        $imagenes = [
            'Morat' => 'https://i.scdn.co/image/ab6761610000e5eb8ee9a6f54dcbd4f842b0da6d',
            'Bad Bunny' => 'https://i.scdn.co/image/ab6761610000e5eb7b4eeab8ff88b6d9f153dd3a',
            'CNCO' => 'https://i.scdn.co/image/ab6761610000e5eb4d73bf4379d40f3f3d0ba8b5',
            'The Weeknd' => 'https://i.scdn.co/image/ab6761610000e5eb214f3cf1cbe7139c1e26ffbb',
            'Karol G' => 'https://i.scdn.co/image/ab6761610000e5eb834c5da597b3a58d3df4bb95',
            'Feid' => 'https://i.scdn.co/image/ab6761610000e5eb9894f0bd6bac4f82c96484f8',
            'Shakira' => 'https://i.scdn.co/image/ab6761610000e5ebb7cb20d6e0c1e5e8c55e82b2',
            'Manuel Turizo' => 'https://i.scdn.co/image/ab6761610000e5eb3e3f32f4cacbc8d6da6f0f24',
            'Rauw Alejandro' => 'https://i.scdn.co/image/ab6761610000e5eb6d2b021f3c26d19992a24da7',
            'Sebastián Yatra' => 'https://i.scdn.co/image/ab6761610000e5eb9c8b7de8b46500684fad2853',
            'Maluma' => 'https://i.scdn.co/image/ab6761610000e5eb09bf4814c6585e1f69dfeef5',
            'Ozuna' => 'https://i.scdn.co/image/ab6761610000e5eb6e6e186f8da2e03871b1a6c2',
            'J Balvin' => 'https://i.scdn.co/image/ab6761610000e5eb43f80e2c075ab7e7020588f7',
            'Camilo' => 'https://i.scdn.co/image/ab6761610000e5eb6b5f2159e4a2d91f76c0497c',
            'Reik' => 'https://i.scdn.co/image/ab6761610000e5eb9e7a9e7c2c90e296a3c22057',
            'Prince Royce' => 'https://i.scdn.co/image/ab6761610000e5eb7eb7402c8a273f86c22c8c2c'
        ];

        // Función helper para obtener la imagen del artista o una por defecto
        $getImagen = function($artista) use ($imagenes) {
            return $imagenes[$artista] ?? 'https://i.scdn.co/image/ab67616d0000b273806c160566580d6335d1f16c';
        };

        // Morat
        Musica::create([
            'titulo' => 'Cómo Te Atreves',
            'artista' => 'Morat',
            'genero' => 'Pop Rock',
            'album' => 'Sobre El Amor Y Sus Efectos Secundarios',
            'duracion' => 191,
            'anio' => 2015,
            'imagen' => $getImagen('Morat')
        ]);

        Musica::create([
            'titulo' => 'Presiento',
            'artista' => 'Morat',
            'genero' => 'Pop Rock',
            'album' => 'Balas Perdidas',
            'duracion' => 210,
            'anio' => 2018,
            'imagen' => $getImagen('Morat')
        ]);

        Musica::create([
            'titulo' => 'Besos en guerra',
            'artista' => 'Morat',
            'genero' => 'Pop Rock',
            'album' => 'Sobre El Amor Y Sus Efectos Secundarios',
            'duracion' => 200,
            'anio' => 2017,
            'imagen' => $getImagen('Morat')
        ]);

        // Más canciones de Morat
        Musica::create([
            'titulo' => 'Cuando Nadie Ve',
            'artista' => 'Morat',
            'genero' => 'Pop Rock',
            'album' => 'Balas Perdidas',
            'duracion' => 190,
            'anio' => 2018,
            'imagen' => $getImagen('Morat')
        ]);

        Musica::create([
            'titulo' => 'Mi Vida Entera',
            'artista' => 'Morat',
            'genero' => 'Pop Rock',
            'album' => 'Balas Perdidas',
            'duracion' => 198,
            'anio' => 2018,
            'imagen' => $getImagen('Morat')
        ]);

        // Bad Bunny
        Musica::create([
            'titulo' => 'Tití Me Preguntó',
            'artista' => 'Bad Bunny',
            'genero' => 'Reggaeton',
            'album' => 'Un Verano Sin Ti',
            'duracion' => 201,
            'anio' => 2022,
            'imagen' => $getImagen('Bad Bunny')
        ]);

        Musica::create([
            'titulo' => 'Moscow Mule',
            'artista' => 'Bad Bunny',
            'genero' => 'Reggaeton',
            'album' => 'Un Verano Sin Ti',
            'duracion' => 195,
            'anio' => 2022,
            'imagen' => $getImagen('Bad Bunny')
        ]);

        Musica::create([
            'titulo' => 'Yo Perreo Sola',
            'artista' => 'Bad Bunny',
            'genero' => 'Reggaeton',
            'album' => 'YHLQMDLG',
            'duracion' => 180,
            'anio' => 2020,
            'imagen' => $getImagen('Bad Bunny')
        ]);

        // Más canciones de Bad Bunny
        Musica::create([
            'titulo' => 'La Canción',
            'artista' => 'Bad Bunny',
            'genero' => 'Reggaeton',
            'album' => 'YHLQMDLG',
            'duracion' => 242,
            'anio' => 2020,
            'imagen' => $getImagen('Bad Bunny')
        ]);

        Musica::create([
            'titulo' => 'Dakiti',
            'artista' => 'Bad Bunny',
            'genero' => 'Reggaeton',
            'album' => 'El Último Tour Del Mundo',
            'duracion' => 205,
            'anio' => 2020,
            'imagen' => $getImagen('Bad Bunny')
        ]);

        // CNCO
        Musica::create([
            'titulo' => 'Reggaetón Lento',
            'artista' => 'CNCO',
            'genero' => 'Reggaeton',
            'album' => 'Primera Cita',
            'duracion' => 231,
            'anio' => 2016,
            'imagen' => $getImagen('CNCO')
        ]);

        Musica::create([
            'titulo' => 'Tan Fácil',
            'artista' => 'CNCO',
            'genero' => 'Pop Latino',
            'album' => 'CNCO',
            'duracion' => 205,
            'anio' => 2018,
            'imagen' => $getImagen('CNCO')
        ]);

        Musica::create([
            'titulo' => 'Hey DJ',
            'artista' => 'CNCO',
            'genero' => 'Reggaeton',
            'album' => 'CNCO',
            'duracion' => 198,
            'anio' => 2018,
            'imagen' => $getImagen('CNCO')
        ]);

        // Más canciones de CNCO
        Musica::create([
            'titulo' => 'Mamita',
            'artista' => 'CNCO',
            'genero' => 'Pop Latino',
            'album' => 'CNCO',
            'duracion' => 217,
            'anio' => 2018,
            'imagen' => $getImagen('CNCO')
        ]);

        Musica::create([
            'titulo' => 'Mi Medicina',
            'artista' => 'CNCO',
            'genero' => 'Pop Latino',
            'album' => 'CNCO',
            'duracion' => 189,
            'anio' => 2018,
            'imagen' => $getImagen('CNCO')
        ]);

        // The Weeknd
        Musica::create([
            'titulo' => 'Blinding Lights',
            'artista' => 'The Weeknd',
            'genero' => 'Synthwave',
            'album' => 'After Hours',
            'duracion' => 200,
            'anio' => 2019,
            'imagen' => $getImagen('The Weeknd')
        ]);

        Musica::create([
            'titulo' => 'Save Your Tears',
            'artista' => 'The Weeknd',
            'genero' => 'Synthpop',
            'album' => 'After Hours',
            'duracion' => 215,
            'anio' => 2019,
            'imagen' => $getImagen('The Weeknd')
        ]);

        Musica::create([
            'titulo' => 'Starboy',
            'artista' => 'The Weeknd',
            'genero' => 'R&B',
            'album' => 'Starboy',
            'duracion' => 230,
            'anio' => 2016,
            'imagen' => $getImagen('The Weeknd')
        ]);

        // Más canciones de The Weeknd
        Musica::create([
            'titulo' => 'Die For You',
            'artista' => 'The Weeknd',
            'genero' => 'R&B',
            'album' => 'Starboy',
            'duracion' => 260,
            'anio' => 2016,
            'imagen' => $getImagen('The Weeknd')
        ]);

        Musica::create([
            'titulo' => 'Take My Breath',
            'artista' => 'The Weeknd',
            'genero' => 'Dance-Pop',
            'album' => 'Dawn FM',
            'duracion' => 339,
            'anio' => 2022,
            'imagen' => $getImagen('The Weeknd')
        ]);

        // Karol G
        Musica::create([
            'titulo' => 'Tusa',
            'artista' => 'Karol G',
            'genero' => 'Reggaeton',
            'album' => 'KG0516',
            'duracion' => 200,
            'anio' => 2019,
            'imagen' => $getImagen('Karol G')
        ]);

        Musica::create([
            'titulo' => 'Bichota',
            'artista' => 'Karol G',
            'genero' => 'Reggaeton',
            'album' => 'KG0516',
            'duracion' => 210,
            'anio' => 2021,
            'imagen' => $getImagen('Karol G')
        ]);

        Musica::create([
            'titulo' => 'Ay, Dios Mío!',
            'artista' => 'Karol G',
            'genero' => 'Reggaeton',
            'album' => 'KG0516',
            'duracion' => 195,
            'anio' => 2020,
            'imagen' => $getImagen('Karol G')
        ]);

        // Más canciones de Karol G
        Musica::create([
            'titulo' => 'Mamiii',
            'artista' => 'Karol G',
            'genero' => 'Reggaeton',
            'album' => 'KG0516',
            'duracion' => 225,
            'anio' => 2022,
            'imagen' => $getImagen('Karol G')
        ]);

        Musica::create([
            'titulo' => 'Provenza',
            'artista' => 'Karol G',
            'genero' => 'Reggaeton',
            'album' => 'Mañana Será Bonito',
            'duracion' => 215,
            'anio' => 2022,
            'imagen' => $getImagen('Karol G')
        ]);

        // Feid
        Musica::create([
            'titulo' => 'Ferxxo 100',
            'artista' => 'Feid',
            'genero' => 'Reggaeton',
            'album' => 'FERXXO',
            'duracion' => 210,
            'anio' => 2020,
            'imagen' => $getImagen('Feid')
        ]);

        Musica::create([
            'titulo' => 'FUMETEO',
            'artista' => 'Feid',
            'genero' => 'Reggaeton',
            'album' => 'FERXXO',
            'duracion' => 215,
            'anio' => 2020,
            'imagen' => $getImagen('Feid')
        ]);

        Musica::create([
            'titulo' => 'Porfa',
            'artista' => 'Feid',
            'genero' => 'Reggaeton',
            'album' => 'FERXXO',
            'duracion' => 185,
            'anio' => 2020,
            'imagen' => $getImagen('Feid')
        ]);

        // Más canciones de Feid
        Musica::create([
            'titulo' => 'Chimbita',
            'artista' => 'Feid',
            'genero' => 'Reggaeton',
            'album' => 'FERXXO',
            'duracion' => 198,
            'anio' => 2020,
            'imagen' => $getImagen('Feid')
        ]);

        Musica::create([
            'titulo' => 'Fresh Kerias',
            'artista' => 'Feid',
            'genero' => 'Reggaeton',
            'album' => 'FERXXO',
            'duracion' => 192,
            'anio' => 2020,
            'imagen' => $getImagen('Feid')
        ]);

        // Shakira
        Musica::create([
            'titulo' => 'Te Felicito',
            'artista' => 'Shakira',
            'genero' => 'Pop Latino',
            'album' => 'Single',
            'duracion' => 172,
            'anio' => 2022,
            'imagen' => $getImagen('Shakira')
        ]);

        Musica::create([
            'titulo' => 'Monotonía',
            'artista' => 'Shakira',
            'genero' => 'Pop Latino',
            'album' => 'Single',
            'duracion' => 158,
            'anio' => 2022,
            'imagen' => $getImagen('Shakira')
        ]);

        // Manuel Turizo
        Musica::create([
            'titulo' => 'La Bachata',
            'artista' => 'Manuel Turizo',
            'genero' => 'Pop Latino',
            'album' => '2000',
            'duracion' => 165,
            'anio' => 2022,
            'imagen' => $getImagen('Manuel Turizo')
        ]);

        Musica::create([
            'titulo' => 'Una Lady Como Tú',
            'artista' => 'Manuel Turizo',
            'genero' => 'Reggaeton',
            'album' => 'ADN',
            'duracion' => 197,
            'anio' => 2019,
            'imagen' => $getImagen('Manuel Turizo')
        ]);

        // Rauw Alejandro
        Musica::create([
            'titulo' => 'Todo de Ti',
            'artista' => 'Rauw Alejandro',
            'genero' => 'Pop Latino',
            'album' => 'Vice Versa',
            'duracion' => 199,
            'anio' => 2021,
            'imagen' => $getImagen('Rauw Alejandro')
        ]);

        Musica::create([
            'titulo' => 'Tattoo',
            'artista' => 'Rauw Alejandro',
            'genero' => 'Reggaeton',
            'album' => 'Afrodisíaco',
            'duracion' => 202,
            'anio' => 2020,
            'imagen' => $getImagen('Rauw Alejandro')
        ]);

        // Sebastián Yatra
        Musica::create([
            'titulo' => 'Tacones Rojos',
            'artista' => 'Sebastián Yatra',
            'genero' => 'Pop Latino',
            'album' => 'Dharma',
            'duracion' => 178,
            'anio' => 2021,
            'imagen' => $getImagen('Sebastián Yatra')
        ]);

        Musica::create([
            'titulo' => 'Traicionera',
            'artista' => 'Sebastián Yatra',
            'genero' => 'Pop Latino',
            'album' => 'Mantra',
            'duracion' => 233,
            'anio' => 2018,
            'imagen' => $getImagen('Sebastián Yatra')
        ]);

        // Maluma
        Musica::create([
            'titulo' => 'Hawái',
            'artista' => 'Maluma',
            'genero' => 'Reggaeton',
            'album' => 'Papi Juancho',
            'duracion' => 200,
            'anio' => 2020,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/3/3f/Maluma_-_Papi_Juancho.png'
        ]);

        Musica::create([
            'titulo' => 'Felices los 4',
            'artista' => 'Maluma',
            'genero' => 'Reggaeton',
            'album' => 'F.A.M.E.',
            'duracion' => 229,
            'anio' => 2017,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/1/1d/Maluma_-_F.A.M.E..png'
        ]);

        // Ozuna
        Musica::create([
            'titulo' => 'Caramelo',
            'artista' => 'Ozuna',
            'genero' => 'Reggaeton',
            'album' => 'ENOC',
            'duracion' => 217,
            'anio' => 2020,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/5/5c/Ozuna_-_ENOC.jpg'
        ]);

        Musica::create([
            'titulo' => 'Del Mar',
            'artista' => 'Ozuna',
            'genero' => 'Reggaeton',
            'album' => 'ENOC',
            'duracion' => 226,
            'anio' => 2020,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/5/5c/Ozuna_-_ENOC.jpg'
        ]);

        // J Balvin
        Musica::create([
            'titulo' => 'Mi Gente',
            'artista' => 'J Balvin',
            'genero' => 'Reggaeton',
            'album' => 'Vibras',
            'duracion' => 189,
            'anio' => 2017,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/3/3f/J_Balvin_-_Vibras.png'
        ]);

        Musica::create([
            'titulo' => 'Agua',
            'artista' => 'J Balvin',
            'genero' => 'Reggaeton',
            'album' => 'Single',
            'duracion' => 157,
            'anio' => 2020,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/8/8b/J_Balvin_and_Tainy_-_Agua.png'
        ]);

        // Camilo
        Musica::create([
            'titulo' => 'Vida de Rico',
            'artista' => 'Camilo',
            'genero' => 'Pop Latino',
            'album' => 'Mis Manos',
            'duracion' => 233,
            'anio' => 2021,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/5/5c/Camilo_-_Mis_Manos.png'
        ]);

        Musica::create([
            'titulo' => 'Tutu',
            'artista' => 'Camilo',
            'genero' => 'Pop Latino',
            'album' => 'Por Primera Vez',
            'duracion' => 183,
            'anio' => 2019,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/f/f7/Camilo_-_Por_Primera_Vez.jpg'
        ]);

        // Reik
        Musica::create([
            'titulo' => 'Si Me Dices Que Sí',
            'artista' => 'Reik',
            'genero' => 'Pop Latino',
            'album' => 'Ahora',
            'duracion' => 233,
            'anio' => 2019,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/a/a0/Reik_-_Ahora.jpg'
        ]);

        Musica::create([
            'titulo' => 'Me Niego',
            'artista' => 'Reik',
            'genero' => 'Pop Latino',
            'album' => 'Ahora',
            'duracion' => 221,
            'anio' => 2018,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/a/a0/Reik_-_Ahora.jpg'
        ]);

        // Prince Royce
        Musica::create([
            'titulo' => 'Carita de Inocente',
            'artista' => 'Prince Royce',
            'genero' => 'Bachata',
            'album' => 'Alter Ego',
            'duracion' => 193,
            'anio' => 2020,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/2/2f/Prince_Royce_-_Alter_Ego.jpg'
        ]);

        Musica::create([
            'titulo' => 'Deja Vu',
            'artista' => 'Prince Royce',
            'genero' => 'Bachata',
            'album' => 'FIVE',
            'duracion' => 232,
            'anio' => 2017,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/8/8f/Prince_Royce_-_Five.jpg'
        ]);
    }
}
