<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    protected $table = 'diplomes';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
