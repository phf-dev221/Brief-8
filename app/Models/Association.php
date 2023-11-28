<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Association as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date_creation',
        'slogan',
        'logo',
        'email',
        'password',
        'role'
    ];
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
