<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Artists;
use Illuminate\Http\Request;


class ArtistController extends Controller{

  public function getArtists(){

    $Artists = Artists::all();

    return response()->json($Artists);
  }

  public function getArtist($id){

    $artist  = Artists::find($id);

    return response()->json($artist);
  }

  public function createArtist(Request $request){

    $artist  = Artists::create($request->all());

    return response()->json($artist);
  }

  public function updateArtist(Request $request, $id){

    $Artist = Artists::find($id);
    $Artist->update($request->all());

    return response()->json($Artist);
  }

  public function getArtistReleases($id){
    $Artists = Artists::all();
    // $Book  = Book::find($id);

    // return response()->json($Artists);

    return $id;
  }
}
?>
