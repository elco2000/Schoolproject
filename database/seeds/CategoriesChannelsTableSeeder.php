<?php

use Illuminate\Database\Seeder;

class CategoriesChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\CategoryChannel::class, 10)->create();
    }
}
