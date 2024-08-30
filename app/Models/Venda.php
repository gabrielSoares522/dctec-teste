<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;


class Venda extends Model
{
    use HasFactory;
    
    public function cliente() {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function pagamento() {
        return $this->belongsTo('App\Models\Pagamento');
    }
}
