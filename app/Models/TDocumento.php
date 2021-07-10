<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TDocumento extends Model
{

    use SoftDeletes;
    
    public $timestamps = false;
    protected $table = "TDocumento";
    protected $fillable = [
        "nombre"
    ];

}
