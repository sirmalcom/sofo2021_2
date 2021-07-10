<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TCargo extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;
    protected $table = "TCargo";
    protected $fillable = [
        "cargo",
        "estado"
    ];
}
