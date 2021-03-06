<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Krisman Pratama',
            'email' => 'krismanpratama@gmail.com',
            'role' => 's',
            'password' => bcrypt('admin123456'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'syariah@uinjambi.ac.id',
            'role' => 's',
            'password' => bcrypt('admin123456')
        ]);

    }
}
