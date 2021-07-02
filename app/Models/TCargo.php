<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCargo extends Model
{
    protected $table = "TCargo";
    protected $fillable = [
        "cargo",
        "estado"
    ];
}
