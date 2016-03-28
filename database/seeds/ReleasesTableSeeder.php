<?php

use App\Releases;
use Illuminate\Database\Seeder;

class ReleasesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('releases')->delete();

    Releases::create(['name' => 'Test Release', 'artist' => 1, 'label' => 1]);
  }

}
