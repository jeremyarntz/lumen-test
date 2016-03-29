<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Labels;


class LabelController extends Controller{

  public function getLabels(){

    $Labels = Labels::all();

    return response()->json($Labels);
  }

  public function getLabel($id){

    $label  = Labels::find($id);

    return response()->json($label);
  }

  public function createLabel(Request $request){

    $label  = Labels::create($request->all());

    return response()->json($label);
  }

  public function updateLabel(Request $request,$id){
    $Label = Labels::find($id);
    $Label->update($request->all());

    return response()->json($Label);
  }

  public function getLabelReleases($id){

    // $Book  = Book::find($id);

    // return response()->json($Book);

    return $id;
  }
}
?>
