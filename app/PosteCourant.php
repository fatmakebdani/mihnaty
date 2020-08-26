<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PosteCourant extends Model
{
    protected $table = 'poste_courants';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
