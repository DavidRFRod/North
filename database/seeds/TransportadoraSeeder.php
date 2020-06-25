<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into transportadoras (IDTransportadora, NomeConpanhia) values (?, ?)');
    }
}
