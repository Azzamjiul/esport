<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'azzam.jiul@gmail.com',
            'registration_status' => '0',
            'fk_operator_id' => '0',
            'invoice' => '0',
            'bukti_bayar' => NULL,
            'type' => 1,
            'telp' => '082330037232',
            'password' => bcrypt('admin'),
            'status' => '0',
            'email_verified_at' => Carbon::now()
        ]);
    }
}
