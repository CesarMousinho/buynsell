<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'César M',
            'email' => 'cmn@cmn.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'admin',
            'dob' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Brandon A',
            'email' => 'bar@bar.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'padrao',
            'dob' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'André Neves',
            'email' => 'andr@andr.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'padrao',
            'dob' => null,

        ]);
    }
}
