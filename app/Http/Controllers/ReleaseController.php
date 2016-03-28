<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ReleaseController extends Controller{

  public function getRelease($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);
  }

  public function createRelease(Request $request){

      return $request;

      // $Book = Book::create($request->all());

      // return response()->json($Book);

  }

  public function updateRelease(Request $request,$id){
      // $Book  = Book::find($id);
      // $Book->delete();

      // return response()->json('deleted');

      return $request;
  }
}
?>
