<?php

use App\Admin;
use Illuminate\Database\Seeder;

class SeedAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
            [
                'name' => 'توانا',
                'username' => 'admin',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'p_id' => 3
            ],  [
                'name' => 'محمد',
                'username' => 'mhamad',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'p_id' => 1
            ],  [
                'name' => 'دانەر',
                'username' => 'danar',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'p_id' => 2
            ]
        ]);
    }
}
