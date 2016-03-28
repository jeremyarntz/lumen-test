<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Releases;
use Illuminate\Http\Request;


class ReleaseController extends Controller{

  public function getRelease($id){

    $release  = Releases::find($id);

    return response()->json($release);
  }

  public function createRelease(Request $request){

    $release = Releases::create($request->all());

    return response()->json($release);
  }

  public function updateRelease(Request $request,$id){
      // $Book  = Book::find($id);
      // $Book->delete();

      // return response()->json('deleted');

      return $request;
  }
}
?>
