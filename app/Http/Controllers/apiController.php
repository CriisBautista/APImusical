<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class apiController extends Controller
{
    //consumir api

    public function inicio($artist_id)
    {
        $cliente=new \GuzzleHttp\Client();
        $response=$cliente->request('get', 'https://api.musixmatch.com/ws/1.1/artist.get?'.$artist_id);
        $datos=json_decode($response->getBody()->getContents(),true);
        
        
        

        
       //recorrer elementos
       $artistas=[];
       foreach($datos['message']['body'] as $artista)
       {
           
           $artistas[]=
           [
               'id'=>$artista['artist_id'],
               'nombre'=>$artista['artist_name'],
               //'pais'=>$artista['artist_country'],
               //'origen'=>$artista['artist_alias'],
               //'popularidad'=>$artista['artist_rating'],
               //'twitter'=>$artista['artist_twitter_url'],
               //'fecha'=>$artista['begin_date']
           ];
           
       }
       echo json_encode($datos);

       echo "<pre>";
       
       print_r($artistas);
       echo"</pre>";



        //return view('prueba', ['artistas'=>$artistas]);

        /*
       'artist_id'=>$artista['artist_id'],
               'artist_name'=>$artista['artist_name'],
               'artist_country'=>$artista['artist_country'],
               'artist_alias'=>$artista['artist_alias'],
               'artist_rating'=>$artista['artist_rating'],
               'artist_twitter_url'=>$artista['artist_twitter_url'],
               'begin_date'=>$artista['begin_date']
        */
    
    }

   

}
