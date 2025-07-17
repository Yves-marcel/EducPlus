<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\exercices;

class questions extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'type',
        'exercice_id',
    ];
    public function exercice()
    {
        return $this->belongsTo(exercices::class);
    }
    public function reponses()
    {
        return $this->hasMany(reponses::class);
    }
    

}
