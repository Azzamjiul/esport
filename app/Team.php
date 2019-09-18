<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;
use App\Schema;
use App\Team_Detail;

class Team extends Model
{
    //
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
    	return $this->hasMany('Team_Detail');
    }
}
