<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('userso')->insert([
        //     'nama' => 'Muhammad Haidar',
        //     'nim' => 'M1234567890',
        //     'div' => 'Biro Riset Pengembangan',
        //     'password' => Hash::make('password')
        // ]);
        Users::factory()->create([
            'nama' => 'Muhammad Haidar',
            'nim' => 'M0403241038',
            'div' => 'Biro Riset Pengembangan',
            'password' => Hash::make('password')
        ]);
        //Users::factory()->count(100)->create();
    }
}
