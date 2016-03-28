<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Collections;
use Illuminate\Http\Request;


class CollectionController extends Controller{

  public function getCollection($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);
  }

  public function addToCollection(Request $request){

    // $Book = Book::create($request->all());

    // return response()->json($Book);

    return $request;
  }

  public function removeFromCollection(Request $request,$id){

    // $Book  = Book::find($id);
    // $Book->delete();

    // return response()->json('deleted');

    return $request;
  }
}
?>
