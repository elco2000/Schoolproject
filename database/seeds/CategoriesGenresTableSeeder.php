<?php

use Illuminate\Database\Seeder;

class CategoriesGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\CategoryGenre::class, 10)->create();
    }
}
