<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SellersModel extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'companyname', 'companyemail', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
