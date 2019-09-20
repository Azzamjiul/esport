<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Team_Detail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();
        try{
            $wkwk = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'telp'  => $data['telp'],
                'invoice' => 50000 + User::count(),
                'fk_operator_id' => 0,
                'registration_status' => 0,
                'type' => 0,
            ]);
                
            for ($i=0; $i < 7; $i++) { 
                Team_Detail::create([
                    'game_id' => 'default',
                    'account_name' => 'default',
                    'full_name' => 'default',
                    'identity_card' => 'noimage.jpg',
                    'fk_team_id' => User::latest()->first()->id,
                    'fk_operator_id' => 1
                ]);
            }
            
            DB::commit();
            return $wkwk;
        }catch(Exception $e){
            DB::rollBack();
            return 0;
        }
    }
}
