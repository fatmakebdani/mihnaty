<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Candidat extends Authenticatable
{
        use Notifiable;

        protected $guard = 'candidat';

        protected $fillable = [
            'nom','prenom', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
