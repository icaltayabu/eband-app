<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Penerbangan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' =>'ebang',
            'username' => 'admin',
            'level' => 'administrator',
            'password' => bcrypt('password'),
        ]);

        Penerbangan::create([
            'tgl_penerbangan' => '2022-01-01',
            'jam_terbang' => '10:00',
            'kode_penerbangan' => 'SUB001',
            'asal' => 'SUB',
            'tujuan' => 'CGK',
            'terminal' => 'Gate 10',
            'pengingat' => '6 jam',
        ]);
    }
}
