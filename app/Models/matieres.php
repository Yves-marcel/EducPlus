<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\lecons;
use App\Models\exercices;
use App\Models\enseignants;

class matieres extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'libelle',
    ]; 
     public function lecons()
     {
        return $this->hasMany(lecons::class);
     }

     public function exercices()
     {
        return $this->hasMany(exercices::class);
     }
        public function enseignants()
        {
            return $this->hasMany(enseignants::class);
        }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'libelle',
    ];  
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // Add any casts if necessary
    ];
}
