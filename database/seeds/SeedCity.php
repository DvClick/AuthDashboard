<?php

use App\City;
use Illuminate\Database\Seeder;

class SeedCity extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        City::insert(
            [
                [
                    'name' => 'سلیمانیە'
                ],
                [
                    'name' => 'اربیل'
                ],
                [
                    'name' => 'بغداد'
                ],
                [
                    'name' => 'بصرة'
                ]
            ]
        );
    }
}
