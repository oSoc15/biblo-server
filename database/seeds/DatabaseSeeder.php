<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
use App\Illustration as Illustration;



=======
>>>>>>> refs/remotes/origin/development
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();

      $this->call('IllustrationTableSeeder');
    }
}
