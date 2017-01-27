<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
  
    public function signatures()
    {
        return $this->hasMany('App\Signature');
    }

}
