<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Mas Mahasiswa',
                'username' => '24060121140105',
                'email' => 'mahasiswa@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')                
            ],

            [
                'name' => 'Mas Doswal',
                'username' => '123456789',
                'email' => 'doswal@gmail.com',
                'role' => 'doswal',
                'password' => bcrypt('123456')                
            ],

            [
                'name' => 'Mas Operator',
                'username' => '123456789',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('123456')                
            ],

            [
                'name' => 'Mas Departemen',
                'username' => '123456789',
                'email' => 'departemen@gmail.com',
                'role' => 'departemen',
                'password' => bcrypt('123456')                
            ],
        ];
        
        
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
