<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);



        kategori::create([
            'jilid'=>'IQRO 1',
            'slug' => 'iqro-1'
        ]);
        kategori::create([
            'jilid'=>'IQRO 2',
            'slug' => 'iqro-2'
        ]);
        kategori::create([
            'jilid'=>'IQRO 3',
            'slug' => 'iqro-3'
        ]);
        kategori::create([
            'jilid'=>'IQRO 4',
            'slug' => 'iqro-4'
        ]);
        kategori::create([
            'jilid'=>'IQRO 5',
            'slug' => 'iqro-5'
        ]);
        kategori::create([
            'jilid'=>'IQRO 6',
            'slug' => 'iqro-6'
        ]);
    }
}
