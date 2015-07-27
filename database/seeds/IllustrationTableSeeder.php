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
            'name' => 'Bieblo als clown'
        ] );
        $a->tags()->attach(1);
        $a->tags()->attach(2);
        $a->tags()->attach(3);
        $a->tags()->attach(4);

        // add 2nd row
        $b = Illustration::create( [
            'name' => 'Bieblo als tovenaar'
        ] );
        $b->tags()->attach(5);
        $b->tags()->attach(6);
        $b->tags()->attach(7);
        $b->tags()->attach(8);

        // add 3rd row
        $c = Illustration::create( [
            'name' => 'Bieblo als detective'
        ] );
        $c->tags()->attach(9);
        $c->tags()->attach(10);

        // add 4th row
        $d = Illustration::create( [
            'name' => 'Bieblo als muzikant'
        ] );
        $d->tags()->attach(11);
        $d->tags()->attach(12);
        $d->tags()->attach(13);

        // add 5th row
        $e = Illustration::create( [
            'name' => 'Bieblo als voetballer'
        ] );
        $e->tags()->attach(14);
        $e->tags()->attach(15);
        $e->tags()->attach(16);
    }
}
