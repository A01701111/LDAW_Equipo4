<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\GetTitles;


class GameController extends Controller
{
    public function index($id, $title)
    {
        if($juego = Games::getGame($id)){

            $titulos = GetTitles::index();

            $imglink = "https://images-na.ssl-images-amazon.com/images/I/51156B1VoAL._AC_.jpg";

            foreach ($titulos as $key => $value) {

                if ($value['Nombre'] == $title) {

                    $imglink = $value['Link'];

                }
            }

            $nombre = Games::getUname($juego['ID_User']);

            $juego['Uname'] = $nombre['Username'];

            $comentarios = Games::getComments($id);

            foreach ($comentarios as $key => &$value) {

                $usuario = Games::getUname($value['ID_User']);

                $value['Uname'] = $usuario['Username'];
                
            }

            return view('game.info', ["juego" => $juego, "comentarios"=> $comentarios], ["titulo" => $title, "imagen" => $imglink]);

        }

        return redirect('/dashboard');
        
    }

    public function videogames($id, $title)
    {
        if($juegos = Games::index($id)){

            
            foreach ($juegos as $key => &$value) {
                
                $nombre = Games::getUname($value['ID_User']);

                $value['Uname'] = $nombre['Username'];

            }


            return view("game.videogames", ["juegos" => $juegos],["titulo" => $title] );

        }

        return redirect('/dashboard');
    }

    public function comment(Request $request, $title)
    {
        $request->validate([
            'content' => 'required',
        ]);

        if(Games::addComment($request->content, $title)){

            return back()->with('alert', 'Comentario');

        }

        return redirect('/dashboard')->with('alert', 'Error de al escribir comentario');
    }
}
