<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'type_id' => 1,
                'first_name' => 'Super',
                'last_name' => 'Administrator',
                'username' => 'superadmin',
                'password' => bcrypt('superadmin')
            ]
        ]);
    }
}
