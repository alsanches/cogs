<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Procedure extends Model
{
    protected $table = 'procedures';
    protected $fillable = ['name','value','collabValue','obs','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }
}
