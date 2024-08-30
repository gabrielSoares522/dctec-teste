<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;


class Produto extends Model
{
    use HasFactory;
    public function item_vendas() {
        return $this->hasMany('App\Models\Item_venda');
    }
}
