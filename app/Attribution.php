<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Attribution extends Authenticatable
{
    use Notifiable;

        protected $table = 'attributions';

        protected $primaryKey = 'id';

        protected $fillable = [
            'offre_id','candidat_id',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    public function user()
    {
        return $this->belongsTo('App\User','candidat_id');
    }
      public function offre()
    {
        return $this->belongsTo('App\Offre');
    }
  

}
