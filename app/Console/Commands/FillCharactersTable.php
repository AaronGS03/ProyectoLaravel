<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Character;

class FillCharactersTable extends Command
{
    protected $signature = 'characters:fill';

    protected $description = 'Fill characters table with sample data';

    public function handle()
    {
        // Aquí puedes generar o definir los datos de los personajes
        $charactersData = [
            [
                'nombre' => 'Sheik',
                'apodos' => 'Mysterious Ninja',
                'franquicia' => 'The Legend of Zelda',
                'descripcion' => 'Sheik es un misterioso ninja que aparece en The Legend of Zelda: Ocarina of Time. Aunque inicialmente se cree que es un personaje masculino, más tarde se revela que Sheik es la identidad alterna de la Princesa Zelda. Como Sheik, Zelda posee habilidades ninja ágiles y usa una variedad de armas arrojadizas y técnicas de combate cuerpo a cuerpo para ayudar a Link en su búsqueda para derrotar a Ganondorf.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/sheik/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/sheik.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'B',
                'color' => '#D3D3D3'
            ],
            [
                'nombre' => 'Zelda',
                'apodos' => 'Princess of Hyrule',
                'franquicia' => 'The Legend of Zelda',
                'descripcion' => 'Zelda es la princesa del reino de Hyrule y una figura central en la serie The Legend of Zelda. A menudo es secuestrada por el malvado hechicero Ganondorf, lo que lleva a Link a embarcarse en una misión para rescatarla y salvar el reino. Aunque a veces se la retrata como una princesa vulnerable, Zelda también es una hechicera poderosa con habilidades mágicas únicas que la ayudan a luchar contra el mal.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/zelda/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/zelda.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'A',
                'color' => '#FFD700'
            ],
            [
                'nombre' => 'Dr. Mario',
                'apodos' => 'Pharmaceutical Physician',
                'franquicia' => 'Mario',
                'descripcion' => 'El Dr. Mario es una versión médica de Mario que usa una bata de médico y una píldora gigante como arma. Aunque es mejor conocido por su trabajo como fontanero, el Dr. Mario demuestra ser igualmente capaz en el campo de la medicina, utilizando sus habilidades médicas para curar enfermedades y derrotar a los virus que amenazan al Reino Champiñón.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/dr_mario/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/dr_mario.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'B',
                'color' => '#8B4513'
            ],
            [
                'nombre' => 'Pichu',
                'apodos' => 'Tiny Mouse Pokémon',
                'franquicia' => 'Pokémon',
                'descripcion' => 'Pichu es un pequeño Pokémon tipo eléctrico que es la pre-evolución de Pikachu. Aunque Pichu es tierno y adorable, puede ser bastante travieso y a menudo se mete en problemas debido a su curiosidad. Con el tiempo, Pichu puede evolucionar a Pikachu si se expone a una Piedra Trueno, lo que lo hace más fuerte y capaz en la batalla.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/pichu/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/pichu.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'C',
                'color' => '#F4A460'
            ],
            [
                'nombre' => 'Falco',
                'apodos' => 'Ace Pilot',
                'franquicia' => 'Star Fox',
                'descripcion' => 'Falco Lombardi es un piloto experto y un miembro destacado del equipo Star Fox. Con su nave, el Arwing, Falco ayuda a defender el sistema Lylat de las fuerzas del mal, incluido el malvado Andross. Conocido por su actitud rebelde y su habilidad para el combate aéreo, Falco es un aliado valioso en la lucha contra el mal en el universo de Star Fox.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/falco/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/falco.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'A',
                'color' => '#FF6347'
            ],
            [
                'nombre' => 'Marth',
                'apodos' => 'Hero King',
                'franquicia' => 'Fire Emblem',
                'descripcion' => 'Marth es un príncipe y un legendario héroe de la serie Fire Emblem. Conocido por su destreza en el combate con espadas, Marth lidera a su ejército en batallas épicas contra fuerzas malignas que amenazan su reino. Además de ser un espadachín hábil, Marth también es conocido por su nobleza y coraje, cualidades que lo convierten en un líder respetado y querido por su pueblo.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/marth/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/marth.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'A',
                'color' => '#4682B4'
            ],
            [
                'nombre' => 'Young Link',
                'apodos' => 'Hero of Time',
                'franquicia' => 'The Legend of Zelda',
                'descripcion' => 'Young Link es una versión más joven de Link, el héroe principal de la serie The Legend of Zelda. Aunque comparte muchas de las habilidades y destrezas de su versión adulta, Young Link es más ágil y rápido en el combate. A menudo se le representa con su fiel compañero, el Skull Kid, mientras viajan juntos por el vasto mundo de Hyrule en busca de aventuras y desafíos.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/young_link/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/young_link.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'B',
                'color' => '#556B2F'
            ],
            [
                'nombre' => 'Ganondorf',
                'apodos' => 'King of Evil',
                'franquicia' => 'The Legend of Zelda',
                'descripcion' => 'Ganondorf es el principal antagonista de la serie The Legend of Zelda y el eterno enemigo de Link y Zelda. Como el Rey del Mal, Ganondorf busca constantemente poder y dominio sobre el reino de Hyrule. Con su fuerza bruta y su magia oscura, Ganondorf representa una amenaza formidable que solo puede ser derrotada por el coraje y la determinación de Link.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/ganondorf/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/ganondorf.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'A',
                'color' => '#8B008B'
            ],
            [
                'nombre' => 'Mewtwo',
                'apodos' => 'Genetic Pokémon',
                'franquicia' => 'Pokémon',
                'descripcion' => 'Mewtwo es un legendario Pokémon psíquico creado artificialmente mediante ingeniería genética. Considerado uno de los Pokémon más poderosos jamás creados, Mewtwo posee habilidades psíquicas extraordinarias que le permiten controlar la mente de otros y manipular la materia a su alrededor. Aunque a menudo se lo retrata como un ser solitario y reservado, Mewtwo es un aliado valioso en la lucha contra el mal.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/mewtwo/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/mewtwo.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'S',
                'color' => '#9400D3'
            ],
            [
                'nombre' => 'Roy',
                'apodos' => 'Young Lion',
                'franquicia' => 'Fire Emblem',
                'descripcion' => 'Roy es un joven héroe y el hijo del legendario marqués Eliwood en la serie Fire Emblem. A pesar de su juventud, Roy muestra una valentía y habilidad excepcionales en el campo de batalla. Con su espada legendaria, la Espada de los Sellos, Roy lidera a su ejército en batallas épicas contra las fuerzas del mal que amenazan su reino.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/roy/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/roy.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'A',
                'color' => '#DC143C'
            ]
        ];
        
        

        // Recorre los datos y crea un nuevo registro para cada personaje
        foreach ($charactersData as $characterData) {
            Character::create($characterData);
        }

        $this->info('Characters table filled with sample data.');
    }
}
