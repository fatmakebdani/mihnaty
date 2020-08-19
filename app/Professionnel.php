<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
  use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
class Professionnel extends Authenticatable
{
    use Notifiable;

        protected $guard = 'professionnel';

        protected $fillable = [
            'nom','prenom', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}