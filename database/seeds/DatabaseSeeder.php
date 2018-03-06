<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Meal::class, 50)->create()->each(function ($u) {
            for ($i=0; $i < 4; $i++) {
                $u->items()->save(factory(App\Item::class)->make());
            }
        });
    }
}
