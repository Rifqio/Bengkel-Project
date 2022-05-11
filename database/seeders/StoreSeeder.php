<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'store_name' => 'Nathan B',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389123',
            'status_activation' => 1,
            'id_mitra' => 2,
            'store_image' => '2dawdw',
            'lat' => '-7.564549075372528',
            'long' => '110.84062825432814',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Nathan C',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 3,
            'store_image' => '3dawdw',
            'lat' => '-7.561835732657607',
            'long' => '110.84882803103476',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
