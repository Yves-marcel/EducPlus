<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\matieres;
use App\Models\niveaux;

class lecons extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'contenu',
        'matiere_id',
        'niveau_id',
    ];
    
    public function matiere()
    {
        return $this->belongsTo(matieres::class);
    }
    public function niveau()
    {
        return $this->belongsTo(niveaux::class);
    }
    public function exercices()
    {
        return $this->hasMany(exercices::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
    ]; 

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
       
    ];
    
}
