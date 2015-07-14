<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')->delete();

      $userJson = File::get(storage_path() . "/jsondata/user.json");
      $book = json_decode($userJson);
      foreach ($book as $object) {
        Book::create(array(
          'name' => $object->name,
          'email' => $object->email,
          'phone' => $object->phone,
          'country' => $object->country,
        ));
      }
    }
}
