<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //$this->call(PostTableSeeder::class);
=======
        // $this->call(PostTableSeeder::class);
>>>>>>> master
        $this->call(TagTableSeeder::class);
    }
}
