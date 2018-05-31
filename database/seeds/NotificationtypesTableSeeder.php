<?php

use Illuminate\Database\Seeder;

class NotificationtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Notificationtype::class, 10)->create();
    }
}
