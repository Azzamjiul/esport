<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Team_Detail extends Model
{
	protected $guarded = [''];
    protected $table = 'team_detail';

    public function team()
    {
    	return $this->belongsTo('User', 'fk_team_id');
    }
}
