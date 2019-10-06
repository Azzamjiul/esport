<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        insertUsers('operator', 'operator@mail.com', 1, 1, 100000, 2, '123456789', 'adminadmin');
        insertUsers('Eko Rostiant', 'eko.rostian@gmail.com', 1, 1, 100000, 2, '123456789', '085791212264');
        insertUsers('Axell Atalla Rajasa', 'axellatalla56@gmail.com', 1, 1, 100000, 2, '123456789', '085959913221');
        insertUsers('Muhammad Rois Mahmudi', 'roismm04@gmail.com', 1, 1, 100000, 2, '123456789', '085606667638');
    }
    
    public function insertUsers($user, $email, $regis, $op_id, $invoice, $type, $telp, $pass) {
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
        insertUsers('operator1', 'operator1@mail.com', 1, 1, 100000, 2, '123456789', 'adminadmin');
        insertUsers('operator2', 'operator2@mail.com', 1, 1, 100000, 2, '123456789', 'adminadmin');
        insertUsers('operator3', 'operator3@mail.com', 1, 1, 100000, 2, '123456789', 'adminadmin');
    }
}
