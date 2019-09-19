<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Match;
use App\Schema;
use App\Team_Detail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function match1()
    {
        return $this->belongsTo('Match', 'fk_team_id1');
    }

    public function match2()
    {
        return $this->belongsTo('Match', 'fk_team_id2');
    }

    public function schema()
    {
        return $this->hasOne('Schema');
    }

    public function detail()
    {
        return $this->hasMany('App\Team_Detail', 'fk_team_id');
    }
}
