<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produto';
    protected $primarykey = 'id';
    protected $fillable = ['nome','desc','cod','tipoProduto_id','peso','unid'];
}
