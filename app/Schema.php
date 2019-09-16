<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Schema extends Model
{
    //
    public function team()
    {
        return $this->belongsTo('Team', 'team_id');
    }
}
