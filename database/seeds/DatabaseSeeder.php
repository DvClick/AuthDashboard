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
        $this->call(SeedPosition::class);
        $this->call(SeedAdmin::class);
        $this->call(SeedDepartment::class);
        $this->call(SeedCity::class);
    }
}
