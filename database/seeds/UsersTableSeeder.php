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
<<<<<<< HEAD
        // insertUsers('operator', 'operator@gmail.com', 1, 1, 100000, 2, '123456789', 'adminadmin');
        DB::table('users')->insert([
            'name' => 'operator',
            'email' => 'operator@gmail.com',
            'registration_status' => 1,
            'fk_operator_id' => 1,
            'invoice' => 100000,
            'type' => 2,
            'telp' => '082330037232',
            'password' => Hash::make('adminadmin'),
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]); 
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
=======
        insertUsers('operator1', 'operator1@mail.com', 1, 1, 100000, 2, '123456789', 'adminadmin');
        insertUsers('operator2', 'operator2@mail.com', 1, 1, 100000, 2, '123456789', 'adminadmin');
        insertUsers('operator3', 'operator3@mail.com', 1, 1, 100000, 2, '123456789', 'adminadmin');
>>>>>>> 7859131304ac947f047794178ffd720c58c188a3
    }
}
