<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\matieres;
use App\Models\niveaux;
use App\Models\lecons; 
use App\Models\User;

class exercices extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'consigne',
        'matiere_id',
        'niveau_id',
        'lecon_id',
        'user_id',
    ];
    public function matiere()
    {
        return $this->belongsTo(matieres::class);
    }
    public function niveau()
    {
        return $this->belongsTo(niveaux::class);
    }
    public function lecon()
    {
        return $this->belongsTo(lecons::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function questions()
    {
        return $this->hasMany(questions::class);
    }

}
