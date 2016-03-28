<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArtistController extends Controller{

  public function getArtists(){

    // $Book  = Book::find($id);

    // return response()->json($Book);
  }

  public function getArtist($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);
  }

  public function createArtist(Request $request){

    return $request;

    // $Book = Book::create($request->all());

    // return response()->json($Book);

  }

  public function updateArtist(Request $request){

    return $request;

    // $Book = Book::create($request->all());

    // return response()->json($Book);

  }

  public function getArtistReleases($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);
  }
}
?>
