<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // add 1st row
        User::create( [
            'name' => 'bieblo',
            'email' => 'bieblo@bieblo.be',
            'password' => bcrypt("Azerty123")
        ] );
    }
}
