<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Collections;
use Illuminate\Http\Request;


class CollectionController extends Controller{

  public function getCollection($id){

    $Collection = Collections::where('user', $id)->get();

    return response()->json($Collection);
  }

  public function addToCollection(Request $request){

    $Collection = Collections::create($request->all());

    return response()->json($Collection);
  }

  public function removeFromCollection(Request $request, $id){

    // $Item  = Book::find($id);
    // $Book->delete();

    // return response()->json('deleted');

    return $request;
  }
}
?>
