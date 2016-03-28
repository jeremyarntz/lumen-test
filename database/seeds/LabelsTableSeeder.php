<?php

use App\Labels;
use Illuminate\Database\Seeder;

class LabelsTableSeeder extends Seeder {

  public function run()
  {
    DB::table('labels')->delete();

    Labels::create(['name' => 'Test Artist']);
  }

}
