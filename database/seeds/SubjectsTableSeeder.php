<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => 'Programación',
            'preguntas' => '100',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('subjects')->insert([
            'name' => 'Redes',
            'preguntas' => '100',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('subjects')->insert([
            'name' => 'Estructuras de datos',
            'preguntas' => '100',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
