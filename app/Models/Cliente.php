<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Eloquent;

class Cliente extends Model
{
    use HasFactory;
    public function vendas() {
        return $this->hasMany('App\Models\Venda');
    }
}
