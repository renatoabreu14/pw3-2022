<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'estoque',
        'subcategoria_id'
    ];

    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class);
    }
}
