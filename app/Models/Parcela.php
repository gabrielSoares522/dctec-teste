<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;


class Parcela extends Model
{
    use HasFactory;
    
    public function pagamento() {
        return $this->belongsTo('App\Models\Pagamento');
    }
}
