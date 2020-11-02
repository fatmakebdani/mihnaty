<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasRole($role)
    {  
      return $this->role == $role;
    }
    public function experiences()
    {
        return $this->hasMany('App\Experience');
    }

    public function poste_courant()
    {
        return $this->hasOne('App\PosteCourant');
    }
    public function diplomes()
    {
        return $this->hasMany('App\Diplome');
    }
    public function competences()
    {
        return $this->hasMany('App\Competence');
    }

    public function professionnel()
    {
        return $this->hasOne('App\Professionnel');
    }

    public function candidat()
    {
        return $this->hasOne('App\Candidat');
    }
    public function offres()
    {
        return $this->hasMany('App\Offre');
    }
    public function fichee()
    {
        return $this->hasOne('App\Fichee');
    }
    public function candidatures()
    {
        return $this->hasMany('App\Candidature');
    }
    public function employe()
     {
      return $this->hasOne('App\Employe');
     }
       public function attributions()
    {
        return $this->hasMany('App\Attribution');
    }

}
