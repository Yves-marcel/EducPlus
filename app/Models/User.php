<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\exercices;
use App\Models\enseignants;
use App\Models\niveau_enseignants;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'firstname',
        'email',
        'photo',
        'phone',
        'birth_date',
        'address',
        'city',
        'country',
        'email_verified_at',
        'role',
        'password',
    ];
    public function exercices()
    {
        return $this->hasMany(exercices::class);
    }
    public function enseignants()
    {
        return $this->hasMany(enseignants::class);
    }
    public function niveau_enseignants()
    {
        return $this->hasMany(niveau_enseignants::class);
    }
    public function reponses()
    {
        return $this->hasMany(reponses::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
