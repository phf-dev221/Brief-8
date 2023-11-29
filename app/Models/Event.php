<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'libelle',
        'date_limite_inscription',
        'description',
        'image',
        'est_cloture',
        'date_evenement',
        'association_id'
    ];
}
