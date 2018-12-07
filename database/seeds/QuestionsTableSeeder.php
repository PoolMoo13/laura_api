<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => 'Nombre del Maestro',
            'answer_1' => 'Pedro',
            'answer_2' => 'Laura',
            'answer_3' => 'Isaac',
            'correct' => 0,
            'subject_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'question' => 'Pregunta 1',
            'answer_1' => 'qwe',
            'answer_2' => 'asd',
            'answer_3' => 'zxc',
            'correct' => 0,
            'subject_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'question' => 'Pregunta 2',
            'answer_1' => '123',
            'answer_2' => '456',
            'answer_3' => '789',
            'correct' => 0,
            'subject_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'question' => 'Pregunta 3',
            'answer_1' => 'Delta',
            'answer_2' => 'Epsilon',
            'answer_3' => 'Zeta',
            'correct' => 0,
            'subject_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'question' => 'Pregunta 4',
            'answer_1' => 'Alpha',
            'answer_2' => 'Beta',
            'answer_3' => 'Gama',
            'correct' => 0,
            'subject_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'question' => 'Pregunta 5',
            'answer_1' => 'Lorem',
            'answer_2' => 'Ispsum',
            'answer_3' => 'Dolet',
            'correct' => 0,
            'subject_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
