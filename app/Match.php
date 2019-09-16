<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Match extends Model
{
    //
    public function team_id1()
    {
    	return $this->hasOne('Team');
    }

    public function team_id2()
    {
    	return $this->hasOne('Team');
    }
}
