<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function position()
    {
        return $this->hasOne('App\Position', 'id', 'p_id');
    }
}
