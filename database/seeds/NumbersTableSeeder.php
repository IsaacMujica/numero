<?php

use Illuminate\Database\Seeder;

class NumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Numeros::class, 20)->create();
    }
}
