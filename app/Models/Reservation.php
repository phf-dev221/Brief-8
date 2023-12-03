<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'nombre_place',
        'is_accepted',

    ];

    public function event(){
        return ($this->belongsTo(Event::class));
    }

    
    public function user(){
        return ($this->belongsTo(User::class));
    }
}
