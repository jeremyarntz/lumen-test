<?php

use App\Users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

  public function run()
  {
    DB::table('users')->delete();

    Users::create(['name' => 'test user', 'token' => '12345678']);
  }
}
