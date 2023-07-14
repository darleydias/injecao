<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    use HasFactory;
    protected $table = 'tipo_produto';
    protected $primarykey = 'id';
    protected $fillable = ['nome'];
    
}
