<?php

use Illuminate\Database\Seeder;
use App\Intro;

class introTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $intros = factory(Intro::class, 1) -> create(); 
    }
}
