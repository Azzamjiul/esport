<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;
use App\Schema;

class Team extends Model
{
    //
    public function match1()
    {
        return $this->belongsTo('Match', 'team_id1');
    }

    public function match2()
    {
        return $this->belongsTo('Match', 'team_id2');
    }

    public function schema()
    {
    	return $this->hasOne('Schema', 'schema_id');
    }

    public function detail()
    {
    	return $this->belongsTo('Team_Detail', 'detail_id');
    }
}
