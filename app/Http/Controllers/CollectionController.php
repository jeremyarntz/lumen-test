<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CollectionController extends Controller{

  public function getCollection($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);
  }

  public function addToCollection(Request $request){

      return $request;

      // $Book = Book::create($request->all());

      // return response()->json($Book);

  }

  public function removieFromCollection(Request $request,$id){
      // $Book  = Book::find($id);
      // $Book->delete();

      // return response()->json('deleted');

      return $request;
  }
}
?>
