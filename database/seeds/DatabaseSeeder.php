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
        $this->call(PetitionsTableSeeder::class);
    }
}

class PetitionsTableSeeder extends Seeder
{
  public function run()
  {
    App\Petition::truncate();

    factory(App\Petition::class, 20)->create();
  }
}
