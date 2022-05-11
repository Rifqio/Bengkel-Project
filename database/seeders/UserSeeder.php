<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            'npwp' => '1234567890120854',
            'email_verified_at' => '2022-04-11 05:44:48',
            'password' => Hash::make('rahasia21'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mitra2',
            'email' => 'mitra2@test.test',
            'nik' => '1234567890121154',
            'npwp' => '1234567890120054',
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
    }
}
