<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Items_table_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("items")->insert(
            [
                "name" => "Zasus 4GB RAM",
                "price" => 450000,
                "stock" => 15
            ],
            [
                "name" => "RAG PC Motherboard",
                "price" => 1500000,
                "stock" => 20
            ],
            [
                "name" => "Zumsang LED Monitor",
                "price" => 2500000,
                "stock" => 5
            ]
        );
    }
}
