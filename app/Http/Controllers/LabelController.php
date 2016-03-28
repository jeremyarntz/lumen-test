<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LabelController extends Controller{

  public function getLabels(){

    // $Book  = Book::find($id);

    // return response()->json($Book);
    echo 'Hello World';
  }

  public function getLabel($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);
  }

  public function createLabel(Request $request){

    if ($request->isJson()) {
      $content = $request->all();

      var_dump($content['name']);
      //var_dump($request->all());
    }
    // echo $decodedRequest['name'];
    //return response()->json(json_encode($decodedRequest));
    // return $request;
    // return $request;

    // $Book = Book::create($request->all());

    // return response()->json($Book);
  }

  public function updateLabel(Request $request,$id){
    // $Book  = Book::find($id);
    // $Book->delete();

    // return response()->json('deleted');

    return $request;
  }

  public function getLabelReleases($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);

    return $id;
  }
}
?>
