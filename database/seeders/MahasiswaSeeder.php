<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker = Faker::create('id_ID');
    for($i = 1; $i <= 100; $i++)
    {
    DB::table('mahasiswa')->insert([
    'nim' => $faker->nik(),
    'nama' => $faker->name(),
    'gender' => $faker->name(),
    'jurusan' => $faker->title(),
    'bidang_minat' => $faker->jobTitle()
    ]);
    }
    }
}
