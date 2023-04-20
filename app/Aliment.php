<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    public $fillable = ['id','nume', 'descriere', 'pret'];
}
