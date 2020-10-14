<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Jury extends Authenticatable
{
    use Notifiable;

        protected $table = 'jurys';

        protected $primaryKey = 'id';

        protected $fillable = [
            'offre_id','professionnel_id',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
        public function professionnels()
    {
        return $this->belongsTo('Fichee.php','id_entreprise');
    }
      public function offre()
      {
        return $this->belongsTo('App\Offre');
      }
         public function evaluations()
    {
        return $this->hasMany('App\Evaluation');
    }
}
