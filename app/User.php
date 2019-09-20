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


    public function match1()
    {
        return $this->belongsTo('Match', 'fk_team_id1');
    }

    public function match2()
    {
        return $this->belongsTo('Match', 'fk_team_id2');
    }

    public function winmatch()
    {
        return $this->belongsTo('Match', 'winner');
    }

    public function schema()
    {
        return $this->hasOne('Schema');
    }

    public function detail()
    {
        return $this->hasMany('App\Team_Detail');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo', 'id', 'fk_team_id');
    }
}
