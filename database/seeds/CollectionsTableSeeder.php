<?php

use App\Collections;
use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder {

  public function run()
  {
    DB::table('collections')->delete();

    Collections::create(['user' => 1, 'release' => 1]);
  }

}
