<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Tag as Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // clear table
        Tag::truncate();
        // add 1st row
        Tag::create( [
            'name' => 'tovenaar'
        ] );
        Tag::create( [
            'name' => 'goochelen'
        ] );
        Tag::create( [
            'name' => 'fantasie'
        ] );
        Tag::create( [
            'name' => 'detective'
        ] );
        Tag::create( [
            'name' => 'griezelverhalen'
        ] );
        Tag::create( [
            'name' => 'sport'
        ] );
        Tag::create( [
            'name' => 'voetbal'
        ] );
        Tag::create( [
            'name' => 'vriendschap'
        ] );
    }
}
