<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDocumento extends Model
{
    protected $table = "TDocumento";
    protected $fillable = [
        "nombre",
        "estado"
    ];

}
