<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class artistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('_artistas')->insert([
            [
                'nombre' => 'The Beatles',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/895c65537c74c2014b459f73e84bccb0/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Grupo británico de música rock y pop, el más admirado y popular de la década de 1960 y uno de los más influyentes en la historia de la música moderna. Si el gran Elvis Presley dominó los años 50 como rey del rock and roll, correspondió a The Beatles, un grupo también rockero en sus raíces, ejercer la hegemonía en la década siguiente con una acertadísima y sofisticada amalgama de estilos que llevaría la música pop a todos los públicos y preludió géneros posteriores.',
                'pais' => 'Inglaterra',
                'alias' => 'John Lennon, Paul McCartney, George Harrison y Ringo Starr',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'1'
            ],
            [
                'nombre' => 'The Rolling Stones',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/2ceac184bc846327f60c5b0d4247cc7a/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Grupo de rock británico integrado por Mick Jagger (Dartford, Reino Unido, 1943), Brian Jones (Cheltenham, Reino Unido, 1944 - Londres, 1969), Keith Richards (Dartford, Reino Unido, 1943), Bill Wyman (Londres, 1936) y Charlie Watts (Londres, 1941).',
                'pais' => 'Inglaterra',
                'alias' => 'Mick Jagger y el guitarrista Keith Richards',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'11'
            ],
            [
                'nombre' => 'Radiohead',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/9508c1217e880b52703a525d1bd5250c/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Nació por la unión de Thom Yorke y Colin Greenwood con la intención de formar un grupo, al cual bautizaron TNT. Luego de un tiempo se integraron Ed O’Brien, Philip Selway y Jonny Greenwood  y cambiaron su nombre a On a Friday, la banda sacó un disco de demos que nunca salió al mercado oficialmente. ',
                'pais' => 'Inglaterra',
                'alias' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'399'
            ],
            [
                'nombre' => 'The Who',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/10be0179e16142c5c770105568401531/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'The Who es una banda de garage rock que se formó el año 1963 en Londres, Inglaterra.',
                'pais' => 'Inglaterra',
                'alias' => 'Roger Daltrey, Pete Townshend, John Entwistle y Keith Moon.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'817'
            ],
            [
                'nombre' => 'The Weeknd',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/bd3f01a27e692074ed40bf8755b06afe/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'comúnmente conocido como The Weeknd (16 de febrero de 1990) cantante, compositor y productor. Nació en Scarborough, Ontario, Toronto, Canadá. Sus padres, Makkonen y Samra Tesfaye, una pareja de emigrantes etíopes que arribaron a Canadá en los años 80',
                'pais' => 'Estados Unidos',
                'alias' => 'Abel Makkonen Tesfaye',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'4050205'
            ],
            [
                'nombre' => 'Billie Eilish',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/8b6e535e08ad7c5cb312102a5ede6c1e/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'es una cantante pop norteamericana. Suele componer en colaboración con su hermano Finneas, que es también el productor de muchas de sus canciones y la acompaña en sus actuaciones.',
                'pais' => 'Estados Unidos',
                'alias' => 'Pirate Baird OConnell',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'9635624'
            ],
            [
                'nombre' => 'Drake',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/5d2fa7f140a6bdc2c864c3465a61fc71/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'nació el 24 de octubre de 1986; es hijo de Sandi Graham (nacida Sher), educadora, y Dennis Graham, un baterista que trabajó con Jerry Lee Lewis. Dos de sus tíos, Larry Graham y Teenie Hodges, también son músicos.',
                'pais' => 'Estados Unidos',
                'alias' => 'Aubrey Drake Graham',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'246791'
            ],
            [
                'nombre' => 'Halsey',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/d3015474e8f3569b87eeb8aa9e241925/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Nació en New Jersey, Estados Unidos. Cantante y compositora estadounidense, considerada una las artistas femeninas más destacadas de los últimos años. Frangipane es conocida por su nombre artístico Halsey, nombre que es un anagrama de su primer nombre (Ashley); esta se dio a conocer en la escena musical pop a comienzos de la década de 2010',
                'pais' => 'Estados Unidos',
                'alias' => 'Ashley Nicolette Frangipane',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'5292512'
            ],
            [
                'nombre' => 'Adele',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/e5fc443d2abc03b487234ba4de65a001/1000x1000-000000-80-0-0.jpg',
                'descripcion' => ' conocida simplemente como Adele, es una cantautora y multinstrumentista británica.​ Es una de las artistas musicales con mayores ventas del mundo, con más de 120 millones de ventas entre discos y sencillos.',
                'pais' => 'Inglaterra',
                'alias' => 'Adele Laurie Blue Adkins',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'75798'
            ],
            [
                'nombre' => 'Juice WRLD',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/32458864045f1087652738e10bcdf74b/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'más conocido por su nombre artístico Juice WRLD, fue un rapero, cantante, compositor y músico estadounidense. Se hizo conocido por los sencillos «All Girls Are the Same» y «Lucid Dreams».',
                'pais' => 'Estados Unidos',
                'alias' => 'Jarad Anthony Higgins',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'14456487'
            ],
            [
                'nombre' => 'Duki',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/342b6c7cb35ff0e44d482597aad0cc9e/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Duki es un freestyler y cantante argentino. Nació como Mauro Ezequiel Lombardo en Buenos Aires el 24 de junio de 1996. Fue inspirado al escuchar batallar a Kodigo, otro rapero nacional. En 2013 participó por primera vez en una batalla, en el encuentro Madero Free, ganado un 2 vs.',
                'pais' => 'Argentina',
                'alias' => 'Mauro Ezequiel Lombardo ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'4902904'
            ],
            [
                'nombre' => 'Marcianeke',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/8970b3a57ab70172e5c501fb01b0361e/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Nació en Talca el 11 de enero de 2002, posteriormente se mudó a Santiago de Chile. ​ Comenzó su carrera musical bajo el nombre artístico de Mati Boy, que luego lo cambió por Marciano y posteriormente por Marcianeke, debido a un tatuaje de un marciano que tiene en su cuerpo.',
                'pais' => 'Chile',
                'alias' => 'Matías Muñoz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'56505532'
            ],
            [
                'nombre' => 'Banda MS de Sergio Lizárraga.',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/da1290662d2b260cc8a3b480f81dd253/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'La Banda Sinaloense MS de Sergio Lizarraga, más conocida únicamente como la Banda MS, es un grupo musical mexicano del género banda sinaloense, también conocida como tambora sinaloense. Su formación tuvo lugar en el municipio de Mazatlán, Sinaloa, durante el año 2003.  De ahí el significado de sus siglas: M por el puerto de Mazatlán y S por el estado mexicano de Sinaloa.',
                'pais' => 'Mexico',
                'alias' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'50683152'
            ],
            [
                'nombre' => 'Christian Nodal.',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/943ec47a9f034de7817b8ff5768e2ff2/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Nació el 11 de enero de 1999 en Caborca, y su nombre formal es Christian Jesús González Nodal. Comienza a ser conocido artísticamente en 2016, al lanzar su primer sencillo “Adiós amor”, provocando su reconocimiento en México y en Estados Unidos.',
                'pais' => 'Mexico',
                'alias' => 'Christian Jesús González Nodal.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'9763952'
            ],
            [
                'nombre' => 'Grupo Firme',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/bd8a34556a8cc37d8065b6045ca1fb56/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Grupo Firme es una agrupación de música regional mexicana. Empezaron cómo grupo norteño, pero también han grabado con banda sinaloense. Ha recibido nominaciones para una variedad de programas que incluyen: Premios Juventud y Premio Lo Nuestro, resultando ganador en 2021 de este último con cinco distinciones.',
                'pais' => 'Mexico',
                'alias' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'9896010'
            ],
            [
                'nombre' => 'Calibre 50',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/9df2c15a59f17ae97c7107268c910933/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'La agrupación Calibre 50 es originaria de Mazatlán, Sinaloa y fue creada en el año 2010; eligen el nombre teniendo en mente la comparación con un elemento que simbolizará la fuerza y el impacto que el proyecto tiene en la vida de los integrantes, así como en la de aquellos que gusten del género Regional Mexicano.',
                'pais' => 'Mexico',
                'alias' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'1530946'
            ],
            [
                'nombre' => 'Maluma',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/3c9d93d84606650bfbc34c8d6f9495f7/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Juan Luis Londoño Arias, conocido por su nombre artístico Maluma, es un actor y cantante colombiano de pop, reguetón y trap latino. Saltó a la fama en su país natal en 2011, gracias a los sencillos «Farandulera», «Obsesión», y «La temperatura»; y con «Carnaval», en el resto de América Latina.',
                'pais' => 'Colombia',
                'alias' => 'Juan Luis Londoño Arias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'1424602'
            ],
            [
                'nombre' => 'JBalvin',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/330420f615ec0c189bf9c729316f1558/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'José Álvaro Osorio Balvín, conocido artísticamente como J Balvin, es un cantante, compositor y productor discográfico colombiano.',
                'pais' => 'Colombia',
                'alias' => 'José Álvaro Osorio Balvín,',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'4860761'
            ],
            [
                'nombre' => 'Luis Miguel',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/7b1eed886634a01210ffc3068c8ff3e9/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Nació en el Hospital San Jorge de Puerto Rico, el 19 de Abril de 1970. Hijo de una Italiana (Marcela Basteri) y un Guitarrista Español (Luis Gallego) que no llego a triunfar en España. Luis Miguel nació en Puerto Rico y no en México como predicaba su padre en un principio.',
                'pais' => 'Puerto Rico',
                'alias' => 'Luis Miguel Gallego Basteri',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'6123'
            ],
            [
                'nombre' => 'Mon Laferte',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/2e9ec51e69cca1c53b74db5f0727cc8b/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Mon Laferte es una música, cantante, compositora y artista visual chilena que incursiona en diferentes ritmos latinos. Nació como Norma Monserrat Bustamante Laferte el 2 de mayo de 1983 en Viña del Mar. A sus 13 años comenzó a estudiar música en el Conservatorio de su ciudad natal.',
                'pais' => 'Chile',
                'alias' => 'Norma Monserrat Bustamante Laferte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'5284515'
            ],
            [
                'nombre' => 'Cami',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/2a528b0170759f4a67e47bfbb8e45839/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Camila Anastasia Gallardo Montalva, más conocida por su nombre artístico Cami, es una compositora y cantante chilena. Se hizo conocida en la primera temporada del programa de televisión The Voice Chile, donde obtuvo el segundo lugar. De ahí, saltó a la fama y firmó con Universal Music. ',
                'pais' => 'Chile',
                'alias' => 'Camila Anastasia Gallardo Montalva',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'144635'
            ],
            [
                'nombre' => 'Canserbero',
                'imagen' => 'https://i.pinimg.com/474x/46/b8/06/46b8060b77fbc9610078b87df4e96f31.jpg',
                'descripcion' => 'Canserbero (11 de marzo de 1988- 20 de enero de 2015) rapero, cantante, compositor y activista. Nació en Caracas, Maracay, Venezuela. Fue bautizado Tirone José González Orama. Sus padres son José Rafael González Ollarves y Leticia Orama.',
                'pais' => 'Venezuela',
                'alias' => 'Tirone José González Orama',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'7180398'
            ],
            [
                'nombre' => 'Aitana',
                'imagen' => 'https://e-cdns-images.dzcdn.net/images/artist/615eda4a27555ccb1105c506076fbdcf/1000x1000-000000-80-0-0.jpg',
                'descripcion' => 'Aitana Ocaña Morales, conocida simplemente como Aitana, es una cantante, compositora y actriz española, que se hizo conocida a raíz de participar en la novena edición de Operación Triunfo en 2017, donde obtuvo el segundo puesto del concurso musical.​​',
                'pais' => 'España',
                'alias' => 'Aitana Ocaña Morales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'11928391'
            ],
            [
                'nombre' => 'Farruko',
                'imagen' => 'https://sites.google.com/site/blogdefarruko/_/rsrc/1415200338409/home/740432.jpg',
                'descripcion' => 'Farruko (Carlos Efrén Reyes Rosado) es un cantante y compositor de música urbana, reggaetón, rap y hip-hop, así como de pop, bachata y vallenato, entre otros ritmos latinoamericanos. Nació en Bayamón, Puerto Rico, el 2 mayo de 1991.',
                'pais' => 'Puerto Rico',
                'alias' => 'Carlos Efrén Reyes Rosado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'id_alter'=>'614223'
            ]

        ]);
    }
}
