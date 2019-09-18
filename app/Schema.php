<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Schema extends Model
{
    protected $table = 'schema';

    public function team()
    {
        return $this->belongsTo('User', 'fk_team_id');
    }
}
