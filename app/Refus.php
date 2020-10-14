<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refus extends Model
{
    protected $table = 'refus';

    protected $primaryKey = 'id';
    protected $fillable = 'motif';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
