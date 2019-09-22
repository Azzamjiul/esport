<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertPhotos($name, $fk_match_id, $fk_team_id) {
    DB::table('photo')->insert([
        'name' => $name,
        'fk_match_id' => $fk_match_id,
        'fk_team_id' => $fk_team_id,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertPhotos('Photo1', 1, 1);
        insertPhotos('Photo2', 1, 1);
        insertPhotos('Photo3', 1, 1);
        insertPhotos('Photo4', 1, 1);
        insertPhotos('Photo5', 1, 1);
        insertPhotos('Photo6', 1, 1);
        insertPhotos('Photo1', 1, 2);
        insertPhotos('Photo2', 1, 2);
        insertPhotos('Photo3', 1, 2);
        insertPhotos('Photo4', 1, 2);
        insertPhotos('Photo5', 1, 2);
        insertPhotos('Photo6', 1, 2);
    }
}
