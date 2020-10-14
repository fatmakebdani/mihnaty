<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Evaluation extends Authenticatable
{
    use Notifiable;

        protected $table = 'evaluations';

        protected $primaryKey = 'id';

        protected $fillable = [
            'jury_id','candidature_id',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    public function jury()
    {
        return $this->belongsTo('App\Jury');
    }
    
      public function candidature()
      {
        return $this->belongsTo('App\Candidature');
      }
}
