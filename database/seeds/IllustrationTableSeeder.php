<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Illustration;
use App\Tag;

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
        $a = Illustration::create( [
            'name' => 'Bieblo als tovenaar'
        ] );
        $a->tags()->attach(1);
        $a->tags()->attach(2);
        $a->tags()->attach(3);
        // add 2nd row
        $b = Illustration::create( [
            'name' => 'Bieblo als detective'
        ] );
        $b->tags()->attach(4);
        $b->tags()->attach(5);
        // add 3rd row
        $c = Illustration::create( [
            'name' => 'Bieblo als voetballer'
        ] );
        $c->tags()->attach(6);
        $c->tags()->attach(7);
    }
}
