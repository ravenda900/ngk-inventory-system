<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::insert([
            [
                'name' => 'Super Administrator'
            ],
            [
                'name' => 'Administrator'
            ]
        ]);
    }
}
