<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    /**
     * Los campos que se pueden asignar de manera masiva.
     *
     * @var array
     */
    protected $fillable = [
        'numero_cuenta',
        'saldo',
        'user_id',
    ];
}
