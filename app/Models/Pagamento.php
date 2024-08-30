<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;


class Pagamento extends Model
{
    use HasFactory;
    public function vendas() {
        return $this->hasMany('App\Models\Venda');
    }
    public function parcelas() {
        return $this->hasMany('App\Models\Parcela');
    }

    
    public function tipo_pagamento() {
        return $this->belongsTo('App\Models\Tipo_pagamento');
    }
}
