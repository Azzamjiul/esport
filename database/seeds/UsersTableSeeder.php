<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertUsers($user, $email, $regis, $op_id, $invoice, $type, $telp, $pass) {
    DB::table('users')->insert([
        'name' => $user,
        'email' => $email,
        'registration_status' => $regis,
        'fk_operator_id' => $op_id,
        'invoice' => $invoice,
        'type' => $type,
        'telp' => $telp,
        'password' => Hash::make($pass),
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertUsers('Op1', 'op1@gmail.com', 1, 1, 100000, 2, '123456789', 'secret');
        insertUsers('Team1', 'team1@gmail.com', 1, 1, 100001, 0, '123456789', 'secret');
        insertUsers('Team2', 'team2@gmail.com', 1, 1, 100002, 0, '123456789', 'secret');
    }
}
