<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Employe extends Authenticatable
{
    use Notifiable;

        protected $table = 'employes';

        protected $primaryKey = 'id';

        protected $fillable = [
            'id_entreprise','id_professionnel',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
