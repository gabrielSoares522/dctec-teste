<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Item_venda extends Model
{
    use HasFactory;

    
    public function venda() {
        return $this->belongsTo('App\Models\Venda');
    }
    
    public function produto() {
        return $this->belongsTo('App\Models\Produto');
    }
}
