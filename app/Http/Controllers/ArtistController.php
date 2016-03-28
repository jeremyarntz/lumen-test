<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Artists;
use Illuminate\Http\Request;


class ArtistController extends Controller{

  public function getArtists(){

    // $Book  = Book::find($id);

    // return response()->json($Book);
  }

  public function getArtist($id){

    $artist  = Artists::find($id);

    return response()->json($artist);
  }

  public function createArtist(Request $request){

    $artist  = Artists::create($request->all());

    return response()->json($artist);

  }

  public function updateArtist(Request $request){

    // $Book = Book::create($request->all());

    // return response()->json($Book);

    return $request;
  }

  public function getArtistReleases($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);

    return $id;
  }
}
?>
