<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichee extends Model
{
     protected $table = 'fichees';

    protected $fillable = ['nom', 'photo', 'raison sociale', 'adresse', 'code postale','site','num','date _de_creation','activité',];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
