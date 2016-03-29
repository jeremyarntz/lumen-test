<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Releases;
use Validator;
use DB;
use Illuminate\Http\Request;


class ReleaseController extends Controller{

  public function getRelease($id){

    $release = DB::table('releases')
                ->join('artists', 'releases.artist', '=', 'artists.id')
                ->join('labels', 'releases.label', '=', 'labels.id')
                ->select('releases.id', 'releases.name', 'artists.name as artist', 'labels.name as label')
                ->where('releases.id', '=', $id)
                ->get();

    dd($release);

    return response()->json($release);
  }

  public function createRelease(Request $request){

    $validator = Validator::make($request->all(), [
        'name' => 'required'
    ]);

    dd($validator);
    $release = Releases::create($request->all());

    return response()->json($release);
  }

  public function updateRelease(Request $request, $id){

    $Release = Releases::find($id);
    $Release->update($request->all());

    return response()->json($Release);
  }
}
?>
