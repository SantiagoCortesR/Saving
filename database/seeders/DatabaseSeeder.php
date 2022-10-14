<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);

         \App\Models\User::factory()->create([
             'name' => 'Santiago Cortes',
             'email' => 'santicortes1409@gmail.com',
             'password' => bcrypt('12345678'),
         ])->assignRole('Super Administrador');

         \App\Models\User::factory()->create([
             'name' => 'Felipe Cortes',
             'email' => 'santicortes14@gmail.com',
             'password' => bcrypt('12345678'),
         ])->assignRole('Administrador');

         \App\Models\User::factory()->create([
             'name' => 'Daniel Cortes',
             'email' => 'santicortes09@gmail.com',
             'password' => bcrypt('12345678'),
         ])->assignRole('Ahorrador');;
    }
}
