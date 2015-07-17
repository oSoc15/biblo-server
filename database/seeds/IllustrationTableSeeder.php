<?php

use Illuminate\Database\Seeder;

class IllustrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('illustrations')->delete();

      Illustration:create(['name' => 'Bieblo als tovenaar']);
    }
}
