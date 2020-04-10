<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this -> call(introTableSeeder::class);
        $this -> call(ContactTableSeeder::class);
        $this -> call(TeamTableSeeder::class);
       
        $this -> call(TestimonialsTableSeeder::class);
        $this -> call(PortfolioTableSeeder::class);
        $this -> call(ServicesTableSeeder::class);
    }
}
