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
//        $this->call(CategoriesTableSeeder::class);
//        $this->call(ChannelsTableSeeder::class);
//        $this->call(GenresTableSeeder::class);
//        $this->call(NotificationsTableSeeder::class);
//        $this->call(ReactionsTableSeeder::class);
//        $this->call(VideosTableSeeder::class);
//        $this->call(NotificationtypesTableSeeder::class);
//        $this->call(CategoriesGenresTableSeeder::class);
        $this->call(CategoriesChannelsTableSeeder::class);
    }
}
