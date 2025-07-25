<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\matieres;

class enseignants extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'matiere_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function matiere()
    {
        return $this->belongsTo(matieres::class);
    }

}
