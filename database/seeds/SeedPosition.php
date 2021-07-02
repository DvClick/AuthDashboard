<?php

use App\Position;
use Illuminate\Database\Seeder;

class SeedPosition extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::insert([
            [
                'position' => 'امین مغزن',
                'route' => '["Accountant","HR","System Admin"]',
            ],  [
                'position' => 'تایید مدیر قیسم الحسابات',
                'route' => '["Accountant","HR","System Admin"]',

            ],  [
                'position' => 'System Admin',
                'route' => '["Accountant","HR","System Admin"]',

            ]
        ]);
    }
}
