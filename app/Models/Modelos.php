<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable= ['sigla','region','precio','id_telefono'];
}
