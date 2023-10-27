<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProductsModel extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'productName', 'category', 'color', 'price', 'piece',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}