<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TComprobante extends Model
{
    protected $table = "TComprobante";
    protected $fillable = [
        "nombre",
        "estado"
    ];
}
