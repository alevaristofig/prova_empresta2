<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
     protected $table = 'convenio';
     protected $fillable = ['chave','valor'];
}
