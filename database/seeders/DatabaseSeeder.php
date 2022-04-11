<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use App\Models\Store;
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
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'user_type' => 'App\Models\User',
        ]);
    }
}
