<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IMS_09_F01 extends Model
{
    public function admin()
    {
        return $this->belongsTo('App\Admin',  'sent_from');
    }
}
