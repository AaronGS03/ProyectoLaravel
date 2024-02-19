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
                'nombre' => 'Link',
                'apodos' => 'Hero of Hyrule, Hero of Time',
                'franquicia' => 'The Legend of Zelda',
                'descripcion' => 'Link es el valiente héroe de la serie de juegos The Legend of Zelda. Con su túnica verde, su espada Maestra y su escudo Hyliano, se embarca en épicas aventuras para salvar el reino de Hyrule y rescatar a la Princesa Zelda.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/link/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/link.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'B-',
                'color' => '#006600'
            ],
            [
                'nombre' => 'Samus',
                'apodos' => 'Bounty Hunter',
                'franquicia' => 'Metroid',
                'descripcion' => 'Samus Aran es una cazarrecompensas intergaláctica y protagonista de la serie de juegos Metroid. Equipada con un traje de energía y una variedad de armas, lucha contra alienígenas y criaturas mutantes en su misión por proteger la galaxia de amenazas alienígenas.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/samus/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/samus.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'A+',
                'color' => '#003366'
            ],
            [
                'nombre' => 'Dark Samus',
                'apodos' => 'Phazon Incarnate',
                'franquicia' => 'Metroid',
                'descripcion' => 'Dark Samus es la antagonista principal en la serie de juegos Metroid Prime. Surgiendo como una entidad oscura y letal creada por la corrupción del Phazon, Dark Samus busca dominar la galaxia y erradicar toda vida orgánica.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/dark_samus/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/dark_samus.png',
                'primera_aparicion' => 'Super Smash Bros. Brawl (2008)',
                'rating_oficial' => 'A+',
                'color' => '#333333'
            ],
            [
                'nombre' => 'Yoshi',
                'apodos' => 'The Green Dinosaur',
                'franquicia' => 'Yoshi',
                'descripcion' => 'Yoshi es un dinosaurio antropomórfico y compañero leal de Mario en su lucha contra Bowser y otros enemigos. Con habilidades únicas como su lengua extensible y la capacidad de tragar a sus enemigos, Yoshi se ha convertido en un personaje icónico de la franquicia de Mario.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/yoshi/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/yoshi.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'A+',
                'color' => '#7CBB00'
            ],
            [
                'nombre' => 'Kirby',
                'apodos' => 'Pink Puffball',
                'franquicia' => 'Kirby',
                'descripcion' => 'Kirby es una adorable bola rosa que habita en Dream Land. Dotado con la habilidad de copiar los poderes de sus enemigos al tragarlos, Kirby es conocido por su valentía y su apetito voraz. A menudo se le ve luchando para proteger su hogar de amenazas como el malvado Rey Dedede y el temible Nightmare.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/kirby/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/kirby.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'D+',
                'color' => '#FF69B4'
            ],
            [
                'nombre' => 'Fox',
                'apodos' => 'Leader of Star Fox Team',
                'franquicia' => 'Star Fox',
                'descripcion' => 'Fox McCloud es el intrépido líder del equipo Star Fox, un grupo de pilotos de élite dedicados a proteger el sistema Lylat de las fuerzas del mal, lideradas por el malvado Andross. Con su nave espacial, el Arwing, Fox se embarca en emocionantes misiones para derrotar a sus enemigos y restaurar la paz en el cosmos.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/fox/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/fox.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'S',
                'color' => '#FF8C00'
            ],
            [
                'nombre' => 'Pikachu',
                'apodos' => 'Electric Mouse Pokémon',
                'franquicia' => 'Pokémon',
                'descripcion' => 'Pikachu es un Pokémon eléctrico de tipo ratón conocido por su cola en forma de rayo y su habilidad para generar descargas eléctricas. Es el icono más reconocible de la franquicia Pokémon y es conocido por su lealtad a su entrenador y su poder en combate.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/pikachu/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/pikachu.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'S-',
                'color' => '#FFD700'
            ],
            [
                'nombre' => 'Luigi',
                'apodos' => 'Green Thunder',
                'franquicia' => 'Mario',
                'descripcion' => 'Luigi es el hermano menor de Mario y a menudo actúa como su compañero en aventuras. Aunque a menudo vive a la sombra de su hermano más famoso, Luigi ha demostrado ser un héroe por derecho propio, enfrentándose a numerosos desafíos para rescatar a la Princesa Peach y salvar el Reino Champiñón.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/luigi/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/luigi.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'B+',
                'color' => '#3CB371'
            ],
            [
                'nombre' => 'Ness',
                'apodos' => 'Psychic Boy',
                'franquicia' => 'EarthBound',
                'descripcion' => 'Ness es un niño con poderes psíquicos que vive en el tranquilo pueblo de Onett. Cuando una fuerza malévola conocida como Giygas amenaza con destruir el mundo, Ness emprende un viaje épico para detenerlo y salvar a la humanidad. Con la ayuda de sus amigos y sus habilidades psíquicas, Ness se convierte en un valiente guerrero en la batalla contra el mal.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/ness/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/ness.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'B+',
                'color' => '#800080'
            ],
            [
                'nombre' => 'Captain Falcon',
                'apodos' => 'The Bounty Hunter',
                'franquicia' => 'F-Zero',
                'descripcion' => 'Captain Falcon es un legendario piloto de carreras y un famoso cazarrecompensas en el universo de F-Zero. Con su nave, el Blue Falcon, Captain Falcon compite en las peligrosas carreras de F-Zero mientras lucha contra el crimen y busca venganza contra sus enemigos. Conocido por su coraje y su destreza en el combate, Captain Falcon es una fuerza a tener en cuenta en el universo de F-Zero.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/captain_falcon/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/captain_falcon.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'B+',
                'color' => '#4169E1'
            ],
            [
                'nombre' => 'Jigglypuff',
                'apodos' => 'Balloon Pokémon',
                'franquicia' => 'Pokémon',
                'descripcion' => 'Jigglypuff es un Pokémon de tipo normal/hada conocido por su forma redonda y su habilidad para cantar una dulce melodía que induce el sueño. Aunque Jigglypuff es tierno y amigable en apariencia, puede volverse feroz en la batalla cuando se enoja. A menudo se le ve cantando en las noches estrelladas en busca de un público dispuesto.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/jigglypuff/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/jigglypuff.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'C+',
                'color' => '#FFC0CB'
            ],
            [
                'nombre' => 'Peach',
                'apodos' => 'Princess of the Mushroom Kingdom',
                'franquicia' => 'Mario',
                'descripcion' => 'La Princesa Peach es la gobernante del Reino Champiñón y una figura querida por todos. A menudo es secuestrada por Bowser, lo que lleva a Mario y sus amigos a embarcarse en misiones para rescatarla. A pesar de su naturaleza real, Peach es valiente y decidida, dispuesta a enfrentarse a cualquier desafío para proteger a su reino y a sus seres queridos.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/peach/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/peach.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'S',
                'color' => '#FF1493'
            ],
            [
                'nombre' => 'Daisy',
                'apodos' => 'Princess of Sarasaland',
                'franquicia' => 'Mario',
                'descripcion' => 'Daisy es la princesa de Sarasaland y una amiga cercana de Peach. A menudo se le ve participando en actividades deportivas y aventuras junto con Mario y sus amigos. Aunque puede ser un poco más atrevida que Peach, Daisy comparte su valentía y determinación para proteger su reino y a sus súbditos.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/daisy/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/daisy.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'S',
                'color' => '#FF4500'
            ],
            [
                'nombre' => 'Bowser',
                'apodos' => 'King of the Koopas',
                'franquicia' => 'Mario',
                'descripcion' => 'Bowser, también conocido como Rey Koopa, es el principal antagonista de la franquicia de Mario. Con su ejército de secuaces koopa, Bowser está constantemente conspirando para conquistar el Reino Champiñón y secuestrar a la Princesa Peach. Aunque a menudo es derrotado por Mario y sus amigos, Bowser sigue siendo una fuerza a tener en cuenta en el mundo de Mario.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/bowser/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/bowser.png',
                'primera_aparicion' => 'Super Smash Bros. (1999)',
                'rating_oficial' => 'B-',
                'color' => '#4B0082'
            ],
            [
                'nombre' => 'Ice Climbers',
                'apodos' => 'Ice-Climbing Duo',
                'franquicia' => 'Ice Climber',
                'descripcion' => 'Los Ice Climbers son Popo y Nana, una pareja de escaladores de montañas que se unen para escalar las peligrosas montañas y recolectar verduras. Aunque suelen ser pacíficos, los Ice Climbers no dudan en enfrentarse a enemigos cuando es necesario. Juntos, forman un equipo imparable que demuestra que la unión hace la fuerza.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/ice_climbers/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/ice_climbers.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'B-',
                'color' => '#00CED1'
            ],
            [
                'nombre' => 'Sheik',
                'apodos' => 'Mysterious Ninja',
                'franquicia' => 'The Legend of Zelda',
                'descripcion' => 'Sheik es un misterioso ninja que aparece en The Legend of Zelda: Ocarina of Time. Aunque inicialmente se cree que es un personaje masculino, más tarde se revela que Sheik es la identidad alterna de la Princesa Zelda. Como Sheik, Zelda posee habilidades ninja ágiles y usa una variedad de armas arrojadizas y técnicas de combate cuerpo a cuerpo para ayudar a Link en su búsqueda para derrotar a Ganondorf.',
                'imagen' => 'https://www.smashbros.com/assets_v2/img/fighter/sheik/main.png',
                'logo' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/sheik.png',
                'primera_aparicion' => 'Super Smash Bros. Melee (2001)',
                'rating_oficial' => 'A-',
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
                'rating_oficial' => 'D+',
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
                'rating_oficial' => 'D+',
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
                'rating_oficial' => 'B-',
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
                'rating_oficial' => 'B+',
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
                'rating_oficial' => 'B-',
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
                'rating_oficial' => 'A-',
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
                'rating_oficial' => 'D-',
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
                'rating_oficial' => 'C+',
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
                'rating_oficial' => 'S',
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
