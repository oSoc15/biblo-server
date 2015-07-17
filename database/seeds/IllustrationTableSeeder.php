<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Illustration;

class IllustrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // clear table
        Illustration::truncate();
        // add 1st row
        Illustration::create( [
            'name' => 'Bieblo als tovenaar'
        ] );

    }
}
