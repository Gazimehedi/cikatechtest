<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepositSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deposits')->insert([
            'rekening' => "test",
            'rekening_asal' => "test",
            'jumlah' => "1254",
            'catatan' => "test",
            'status' => "0",
            'created_at'=>now(),
        ]);
    }
}
