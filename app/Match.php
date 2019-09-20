<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Match extends Model
{
	protected $table = 'match';

    protected $fillable = [
        'match_start', 'match_end', 'winner',
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
        return $this->hasOne('App\User', 'id');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo', 'fk_match_id');
    }
}
