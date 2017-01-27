<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    public function petition()
    {
        return $this->belongsTo('App\Petition');
    }
}
