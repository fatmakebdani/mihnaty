<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Candidat extends Authenticatable
{
        use Notifiable;

        protected $table = 'candidats';

        protected $primaryKey = 'id';

        protected $fillable = [
            'nom','prenom', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function user()
        {
            return $this->belongsTo('App\User');
        }
        public function candidats()
        {
            return $this->hasMany('App\Candidature');
        }
}
