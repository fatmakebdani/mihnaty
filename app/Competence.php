<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $table = 'competences';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
