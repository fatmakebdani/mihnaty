<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
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
    public function getSeaechResult():SearchResult
    {
        $url = route('categories.show',$this->id);
        return new SearchResult(
            $this,
            $this->titre,
            $url
            );
    }
    public function professionnels()
    {
        return $this->belongsToMany('Professionnel.php');
    }
    public function candidatures()
    {
        return $this->hasMany('App\Candidature');
    }
     public function jurys()
    {
        return $this->hasMany('App\Jury');
    }
} 
