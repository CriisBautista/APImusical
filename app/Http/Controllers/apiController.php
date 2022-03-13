<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class apiController extends Controller
{
    //

    public function artistas()
    {
        

        $cliente=new \GuzzleHttp\Client();
        $response=$cliente->request('get', 'https://api.deezer.com/artist/1');//the beatles
        $datos=json_decode($response->getBody()->getContents(),true);

        $cliente2=new \GuzzleHttp\Client();
        $response2=$cliente2->request('get', 'https://api.deezer.com/artist/11');//The Rolling Stones
        $datos2=json_decode($response2->getBody()->getContents(),true);

        $cliente3=new \GuzzleHttp\Client();
        $response3=$cliente3->request('get', 'https://api.deezer.com/artist/399');//Radiohead
        $datos3=json_decode($response3->getBody()->getContents(),true);

        $cliente4=new \GuzzleHttp\Client();
        $response4=$cliente4->request('get', 'https://api.deezer.com/artist/817');//The Who
        $datos4=json_decode($response4->getBody()->getContents(),true);

        $cliente5=new \GuzzleHttp\Client();
        $response5=$cliente5->request('get', 'https://api.deezer.com/artist/4050205');//The Weeknd.
        $datos5=json_decode($response5->getBody()->getContents(),true);

        $cliente6=new \GuzzleHttp\Client();
        $response6=$cliente6->request('get', 'https://api.deezer.com/artist/9635624');//Billie Eilish.
        $datos6=json_decode($response6->getBody()->getContents(),true);

        $cliente7=new \GuzzleHttp\Client();
        $response7=$cliente7->request('get', 'https://api.deezer.com/artist/246791');//Drake.
        $datos7=json_decode($response7->getBody()->getContents(),true);

        $cliente8=new \GuzzleHttp\Client();
        $response8=$cliente8->request('get', 'https://api.deezer.com/artist/5292512');//Halsey.
        $datos8=json_decode($response8->getBody()->getContents(),true);

        $cliente9=new \GuzzleHttp\Client();
        $response9=$cliente9->request('get', 'https://api.deezer.com/artist/75798');//adele
        $datos9=json_decode($response9->getBody()->getContents(),true);

        $cliente10=new \GuzzleHttp\Client();
        $response10=$cliente10->request('get', 'https://api.deezer.com/artist/14456487');//Juice WRLD.
        $datos10=json_decode($response10->getBody()->getContents(),true);

        $cliente11=new \GuzzleHttp\Client();
        $response11=$cliente11->request('get', 'https://api.deezer.com/artist/4902904');//duki
        $datos11=json_decode($response11->getBody()->getContents(),true);

        $cliente12=new \GuzzleHttp\Client();
        $response12=$cliente12->request('get', 'https://api.deezer.com/artist/56505532');//marcianeke
        $datos12=json_decode($response12->getBody()->getContents(),true);

        $cliente13=new \GuzzleHttp\Client();
        $response13=$cliente13->request('get', 'https://api.deezer.com/artist/50683152');//Banda MS de Sergio Lizárraga.
        $datos13=json_decode($response13->getBody()->getContents(),true);

        $cliente14=new \GuzzleHttp\Client();
        $response14=$cliente14->request('get', 'https://api.deezer.com/artist/9763952');//Christian Nodal.
        $datos14=json_decode($response14->getBody()->getContents(),true);

        $cliente15=new \GuzzleHttp\Client();
        $response15=$cliente15->request('get', 'https://api.deezer.com/artist/9896010');//Grupo Firme.
        $datos15=json_decode($response15->getBody()->getContents(),true);

        $cliente16=new \GuzzleHttp\Client();
        $response16=$cliente16->request('get', 'https://api.deezer.com/artist/1530946');//Calibre 50.
        $datos16=json_decode($response16->getBody()->getContents(),true);

        $cliente17=new \GuzzleHttp\Client();
        $response17=$cliente17->request('get', 'https://api.deezer.com/artist/1424602');//Maluma.
        $datos17=json_decode($response17->getBody()->getContents(),true);
        
        $cliente18=new \GuzzleHttp\Client();
        $response18=$cliente18->request('get', 'https://api.deezer.com/artist/4860761');//Jbalvin.
        $datos18=json_decode($response18->getBody()->getContents(),true);

        $cliente19=new \GuzzleHttp\Client();
        $response19=$cliente19->request('get', 'https://api.deezer.com/artist/614223');//farruko
        $datos19=json_decode($response19->getBody()->getContents(),true);
        
        $cliente20=new \GuzzleHttp\Client();
        $response20=$cliente20->request('get', 'https://api.deezer.com/artist/6123');//Luis Miguel.
        $datos20=json_decode($response20->getBody()->getContents(),true);

        $cliente21=new \GuzzleHttp\Client();
        $response21=$cliente21->request('get', 'https://api.deezer.com/artist/5284515');//mon laferte
        $datos21=json_decode($response21->getBody()->getContents(),true);
        
        $cliente22=new \GuzzleHttp\Client();
        $response22=$cliente22->request('get', 'https://api.deezer.com/artist/144635');//cami
        $datos22=json_decode($response22->getBody()->getContents(),true);

        $cliente23=new \GuzzleHttp\Client();
        $response23=$cliente23->request('get', 'https://api.deezer.com/artist/7180398');//cancerbero
        $datos23=json_decode($response23->getBody()->getContents(),true);

        $cliente24=new \GuzzleHttp\Client();
        $response24=$cliente24->request('get', 'https://api.deezer.com/artist/11928391');//aitana
        $datos24=json_decode($response24->getBody()->getContents(),true);

        $array = array($datos, $datos2, $datos3, $datos4, $datos5, $datos6, $datos7, $datos8, $datos9, $datos10, $datos11, $datos12, $datos13, $datos14, $datos15, $datos16, $datos17, $datos18, $datos19, $datos20, $datos21, $datos22, $datos23, $datos24);
        
        $artistas = [];

        foreach ($array as $artista){
            $artistas[] = [
                'id' => $artista['id'],
                'nombre' => $artista['name'],
                'imagen' => $artista['picture_xl']
            ];
        }
        
       //echo "<pre>";
       //print_r($artistas);
       //echo"</pre>";
        return view('index',['artistas' => $artistas]);

    }

    public function vistaArtista($id_alter){
        
        $art = Artist::where('id_alter',$id_alter)->first();

        return view('ver-artista', ['art' => $art]);
        
    }

    

}
