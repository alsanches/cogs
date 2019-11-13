<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = ['name', 'cpf', 'obs', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
