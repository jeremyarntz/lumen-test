<?php

use App\Artists;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder {

  public function run()
  {
    DB::table('artists')->delete();

    Artists::create(['name' => 'Test Artist']);
  }

}
