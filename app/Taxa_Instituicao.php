<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxa_Instituicao extends Model
{
    protected $table = 'taxas_instituicoes';
    protected $fillable = ['parcelas','taxajuros','coeficiente','instituicao','convenio'];
}
