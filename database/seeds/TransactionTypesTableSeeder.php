<?php

use Illuminate\Database\Seeder;
use App\TransactionType;

class TransactionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionType::insert([
            [
                'name' => 'Restock'
            ],
            [
                'name' => 'Sold'
            ]
        ]);
    }
}
