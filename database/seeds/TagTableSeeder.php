<?php

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
            'name' => 'lachen'
        ] );
        Tag::create( [
            'name' => 'humor'
        ] );
        Tag::create( [
            'name' => 'moppen'
        ] );
        Tag::create( [
            'name' => 'raadsels'
        ] );

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
            'name' => 'sprookje'
        ] );

        Tag::create( [
            'name' => 'detective'
        ] );
        Tag::create( [
            'name' => 'griezel'
        ] );

        Tag::create( [
            'name' => 'muziek'
        ] );
        Tag::create( [
            'name' => 'dans'
        ] );
        Tag::create( [
            'name' => 'feest'
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
