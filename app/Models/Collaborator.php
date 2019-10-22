<?php

namespace App\Models;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $table = 'collaborators';
    protected $fillable = ['name','surname','email','percent', 'parcelPercent', 'obs','user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

}
