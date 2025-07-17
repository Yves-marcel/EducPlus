<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveau_enseignants extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'niveau_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function niveau()
    {
        return $this->belongsTo(niveaux::class);    
    }
}
