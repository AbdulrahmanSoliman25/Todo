<?php

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Seeder;

class Todosseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Todo::class,10)->create(); 
    }
}
