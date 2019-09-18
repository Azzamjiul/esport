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

    public function fk_team_id1()
    {
    	return $this->hasOne('User');
    }

    public function fk_team_id2()
    {
    	return $this->hasOne('User');
    }
}
