<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        //SuperAdmin
        DB::table('users')->insert([
            'name' => 'SuperAdmin',
            'email' => 'super@test.test',
            'nik' => '1234567890123456',
            'email_verified_at' => '2022-04-11 05:44:48',
            'password' => Hash::make('rahasia21'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mitra',
            'email' => 'mitra@test.test',
            'nik' => '1234567890121156',
            'email_verified_at' => '2022-04-11 05:44:48',
            'password' => Hash::make('rahasia21'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mitra2',
            'email' => 'mitra2@test.test',
            'nik' => '1234567890121154',
            'email_verified_at' => '2022-04-11 05:44:48',
            'password' => Hash::make('rahasia21'),
        ]);
        
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'user_type' => 'App\Models\User',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 2,
            'user_type' => 'App\Models\User',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 3,
            'user_type' => 'App\Models\User',
        ]);

        DB::table('categories')->insert([
            'name' => 'Ban Motor',
            'slug' => 'Ban-motor',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Busi Motor',
            'slug' => 'Busi-motor',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Nathan B',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389123',
            'status_activation' => 1,
            'id_mitra' => 2,
            'store_image' => '2dawdw',
            'lat'=>'-7.564549075372528',
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
            'lat'=>'-7.561835732657607',
            'long' => '110.84882803103476',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
