<?php

use Illuminate\Database\Seeder;
use App\Testimonial; 
class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Testimonial::class,4)->create();
    }
}