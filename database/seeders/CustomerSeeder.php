<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
         ->count(25)
         ->hasInvoice(10)
         ->create();
        Customer::factory()
         ->count(100)
         ->hasInvoice(5)
         ->create();
        Customer::factory()
         ->count(100)
         ->hasInvoice(3)
         ->create();
        Customer::factory()
         ->count(5)
         ->create();
    }
}
