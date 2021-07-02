<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCategoria extends Model
{
    protected $table = "TCategoria";
    protected $fillable = [
        "nombre",
        "estado"
    ];
}
