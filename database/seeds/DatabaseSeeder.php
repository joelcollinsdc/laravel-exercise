<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PetitionsAndSignaturesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

class PetitionsAndSignaturesTableSeeder extends Seeder
{
  public function run()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    App\Signature::truncate();
    App\Petition::truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    factory(App\Petition::class, 20)->create();

    factory(App\Signature::class, 100)->create();
  }
}

class UsersTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@example.com',
        'password' => bcrypt('example'),
    ]);
  }
}

