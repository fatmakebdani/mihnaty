<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';

    protected $primaryKey = 'id';
    protected $fillable = [
        'nom_en', 'titre-en', 'date_debut', 'date_fin'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
