<?php

namespace Database\Seeders;
use App\Models\Customer;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
        ->count(10)
        ->hasReceipts(5)
        ->create();

        Customer::factory(5)
        ->count(5)
        ->hasReceipts(2)
        ->create();

        Customer::factory(7)
        ->count(7)
        ->hasReceipts(1)
        ->create();

        Customer::factory(8)
        ->count(8)
        ->hasReceipts()
        ->create();
    }
}
