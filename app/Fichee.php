<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
  use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
class Fichee extends Authenticatable
{
    use Notifiable;

        protected $table = 'fichees';

        protected $primaryKey = 'id';

        protected $fillable = [
            'nom','adresse', 'site', 'code_postal','num','date_de_creation','raison_sociale','activité',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
