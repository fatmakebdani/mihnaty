<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Professionnel extends Authenticatable
{
    use Notifiable;

        protected $table = 'professionnels';

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
    public function professionnels()
    {
        return $this->belongsTo('Fichee.php','id_entreprise');
    }
    public function jurys()
    {
        return $this->belongsTo('offre.php','id_offre');
    }
    public function employe()
    {
        return $this->hasOne('App\Employe');
    }
}
