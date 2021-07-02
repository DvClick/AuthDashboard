<?php

use App\Department;
use Illuminate\Database\Seeder;

class SeedDepartment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::insert(
            [
                [
                    'title' => 'تعدیل'
                ],
                [
                    'title' => 'الغاء'
                ],
                [
                    'title' => 'اصدار'
                ]
            ]
        );
    }
}
