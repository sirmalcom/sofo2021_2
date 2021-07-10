<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MUsuario extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;
    protected $table = "MUsuario";
    protected $fillable = [
        "usuario",
        "clave",
        "idTCargo"
    ];
}
