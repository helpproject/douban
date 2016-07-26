<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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

        // $this->call(UserTableSeeder::class);
<<<<<<< HEAD
=======
        $this->call(UsersSeeder::class);
>>>>>>> 2ca7525e5383b0122b86bd669b09114c9b74c9c9

        Model::reguard();
    }
}
