<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Grupo;
use App\Models\Matricula;
use App\Models\User;
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
    	User::truncate();
    	Grupo::truncate();
    	Matricula::truncate();
        Grupo::factory(20)->create();
        Matricula::factory(15)->create();
        User::create([
            'name' => 'Alejandro Peragon',
            'email' => '1794842@alu.murciaeduca.es',
            'password' => bcrypt('password'),
            'usuario_av' => 2435306,
        ])->cursos()->attach(\Illuminate\Support\Arr::pluck(Curso::factory()->count(3)->create(), 'id'));
    }
}
