<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class UserData extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "user_data"; 
    protected $primaryKey = "id"; 

    protected $fillable = ['name', 'email', 'password']; 
    protected $hidden = ['password'];
}
