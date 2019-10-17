<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match_Internal extends Model
{
    protected $table = 'pertandingan_internal';

    protected $fillable = [
        'id_name', 'name', 'seed', 'round', 'score', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'foto6', 'fk_operator_id',
    ];

    public function team_id1()
    {
    	return $this->hasOne('App\User', 'id', 'fk_team_id1');
    }

    public function team_id2()
    {
    	return $this->hasOne('App\User', 'id', 'fk_team_id2');
    }

    public function win()
    {
        return $this->hasOne('App\User', 'id', 'seed');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo', 'fk_match_id');
    }
}
