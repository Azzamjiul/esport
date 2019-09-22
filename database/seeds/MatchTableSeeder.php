<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertMatchs($match_start, $match_end, $winner, $fk_team_id1, $fk_team_id2) {
    DB::table('match')->insert([
        'match_start' => $match_start,
        'match_end' => $match_end,
        'winner' => $winner,
        'fk_team_id1' => $fk_team_id1,
        'fk_team_id2' => $fk_team_id2,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertMatchs('2019-09-20 00:00:00', '2019-09-20 00:00:00', NULL, 2, 3);
    }
}
