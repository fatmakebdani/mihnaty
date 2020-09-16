<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Offre extends Authenticatable
{
    use Notifiable;

        protected $table = 'offres';

        protected $primaryKey = 'id';

        protected $fillable = [
            'titre','ville','cat','contrat','salaire', 'sexe','dernier_delais','date_notif','date_fonction',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
