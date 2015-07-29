<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Illustration as Illustration;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('illustration_tag')->delete();

        Model::unguard();

        $this->call('TagTableSeeder');
        $this->call('IllustrationTableSeeder');
        $this->call('UserTableSeeder');
    }
}
