<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'user_id' => 1,
            'subject_id' => 1,
            'grade' => 90,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'user_id' => 1,
            'subject_id' => 2,
            'grade' => 95,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'user_id' => 1,
            'subject_id' => 3,
            'grade' => 100,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
