<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    const Admin_Role = 'ADMIN';
    const Promo_Role = 'PROMO';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     */



    protected $fillable = [
        'prenom',
        'age',
        'name',
        'email',
        'password',
        'roles',



    ];

    public function Notification(){

        return $this->belongsTo(Notification::class);

    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
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
    ];

    public function isAdmin()
    {
        return $this->roles == self::Admin_Role;
    }

    public function isPromoteur()
    {
        return $this->roles == self::Promo_Role;
    }

    public function roleName()
    {
        if($this->isAdmin()) return 'ESPACE ADMIN';

        if($this->isPromoteur()) return 'ESPACE PROMO';
    }

}
