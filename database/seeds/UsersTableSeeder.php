<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertUsers('Administrator', 'administrator@esport.com', 0, 0, 0, 2, '082330037232', 'adminadmin');
    }

    private function insertUsers($user, $email, $regis, $op_id, $invoice, $type, $telp, $pass) {
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
}
