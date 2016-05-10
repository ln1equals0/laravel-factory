<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    public function run()
    {
       factory('App\Lesson', 50)->create(); 
    }
}