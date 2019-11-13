<?php

namespace App;

use App\Models\Patient;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function collaborator(){
        return $this->hasMany(Collaborator::class);
    }

    public function procedure(){
        return $this->hasMany(Procedure::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

    public function patient(){
        return $this->hasMany(Patient::class);
    }



}
