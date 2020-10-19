<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orders;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        factory(App\Orders::class, 20)->create();
        //$this->call(App\Orders::class);
    }
}
