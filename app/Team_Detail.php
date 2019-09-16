<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Team_Detail extends Model
{
    //
    public function team()
    {
    	return $this->hasOne('Team', 'team_id');
    }
}
