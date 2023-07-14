<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $primarykey = 'id';
    protected $fillable = ['nome','CNPJ','cel','email','contato','insEst','insMun'];
}
